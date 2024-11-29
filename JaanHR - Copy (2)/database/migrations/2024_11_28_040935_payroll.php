<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('payrolls', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('payroll_month');
            $table->decimal('basic_salary', 10, 2);
            $table->decimal('allowances', 10, 2)->nullable();
            $table->decimal('deductions', 10, 2)->nullable();
            $table->decimal('net_salary', 10, 2);
            $table->timestamps();

            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('payrolls');
    }
};
