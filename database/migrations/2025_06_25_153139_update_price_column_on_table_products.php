<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            // Rename column 'price' to 'purchase_price'
            $table->renameColumn('price', 'purchase_price');

            // Add 'selling_price' column after 'purchase_price'
            $table->decimal('selling_price', 10, 2)->after('purchase_price');
        });
    }

    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            // Rollback: rename 'purchase_price' back to 'price'
            $table->renameColumn('purchase_price', 'price');

            // Drop 'selling_price'
            $table->dropColumn('selling_price');
        });
    }
};
