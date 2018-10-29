<?php

use app\Client;
use Illuminate\Database\Seeder;
use App\Employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $employee = new Employee();

        $employee->department = 'development';
        $employee->password = '$2y$10$eImQr5eaXX3Hkol0USHlKOvKzlUoDkMFxR8.OkiWnrs9d.Hs/2YjW';
        $employee->remember_token = 'X7LdkGG6Y81Lq9g3eoScvX3Pkjkserlx6m15Xa1OTQd2McJnZiJVbczJLC5J';
        $employee->save();

        $employee = new Employee();

        $employee->department = 'sales';
        $employee->password = '$2y$10$DwwVD5aQvRhxbyxXeWtb9e8GYTv14D8fho5szq3T4.FNLnartpaIG';
        $employee->remember_token = '0xAdg6lHJw43f1p5VVMlZqiBz0Lroxw7GL6aMU3LIVfzojUhayTeVpY83kWZ';
        $employee->save();

        $employee = new Employee();

        $employee->department = 'finance';
        $employee->password = '$2y$10$nAElhhMneQC6m/zJmunIhOZtQQT7XYr52T6uG6pwjvcD2eM5VG7E6';
        $employee->remember_token = '7MkfvDlYDMNL6hKCigjaLaWbH8KKX9CLjiYlqsXCvt9O4Ru7o0ijmKCYy3nP';
        $employee->save();





    }
}
