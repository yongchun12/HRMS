<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('leave', function (Blueprint $table) {

            //Leave ID
            $table->id();

            //Employee ID / Users ID
            $table->integer('employee_id');
            $table->string('type_of_leave')->comment('0 - Unpaid Leave, 1 - Normal Leave, 2 - Medical Leave');
            $table->string('description', 5000);
            $table->string('leave_status')->comment('0 - Pending, 1 - Approved, 2 - Rejected');

            //HR Provide Reason when Rejected
            $table->string('reject_reason', 5000)->nullable();

            //Edited
            // - Change date_of_leave to from_leave Date
            // - Add column (to_leaveDate)
            $table->date('from_leaveDate');
            $table->date('to_leaveDate');

            //Included Created and Latest updated time
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leave');
    }
};
