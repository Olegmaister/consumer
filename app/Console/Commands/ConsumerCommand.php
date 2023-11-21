<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PhpAmqpLib\Connection\AMQPStreamConnection;

class ConsumerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rabbitmq:consumer';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        //подключение к очереди laravel_admin
        $channel->queue_declare('laravel_admin', false, true, false, false);

        echo " [*] Waiting for messages. To exit press CTRL+C\n";



        $callback = function ($msg) {
            echo ' [x] Received ', $msg->body, "\n";
        };

        /*пробуем прочитать*/
        $channel->basic_consume('laravel_admin', '', false, true, false, false, $callback);

        try {
            $channel->consume();
        } catch (\Throwable $exception) {
            echo $exception->getMessage();
        }

    }
}
