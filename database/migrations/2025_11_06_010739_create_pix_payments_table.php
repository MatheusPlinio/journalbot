<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pix_payments', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id');
            $table->text('qr_code')->nullable();
            $table->text('qr_code_base64')->nullable();
            $table->timestamp('expiration_date')->nullable();
            $table->enum('status', [
                'pending',
                'in_process',
                'approved',
                'rejected',
                'expired',
                'cancelled',
                'refunded',
                'chargeback'
            ])->default('pending');
            $table->string('payer_email')->nullable();
            $table->json('response_payload')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pix_payments');
    }
};
