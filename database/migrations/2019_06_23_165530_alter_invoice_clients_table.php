<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterInvoiceClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('invoice_clients', function($table) {
            $table->dropForeign(['client_id']);
            $table->dropColumn(['client_id']);
            $table->bigInteger('invoice_clients_id')->unsigned()->nullable();
            $table->date('dated')->nullable();
            $table->integer('challan_no')->nullable();
            $table->string('mode_terms_of_payment')->nullable();
            $table->string('suppliers_ref')->nullable();
            $table->string('other_ref')->nullable();
            $table->string('buyers_order_no')->nullable();
            $table->date('buyers_order_date')->nullable();
            $table->string('dispatch_document_no')->nullable();
            $table->date('delivery_note_date')->nullable();
            $table->string('dispatched_through')->nullable();
            $table->string('destination')->nullable();
            $table->string('terms_of_delivery')->nullable();

            // Foreign key to designations table.
            $table->foreign('invoice_clients_id')->references('id')->on('invoice_clients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['invoice_clients_id']);
        $table->dropColumn(['invoice_clients_id']);
        $table->dropColumn('dated');
        $table->dropColumn('challan_no');
        $table->dropColumn('mode_terms_of_payment');
        $table->dropColumn('suppliers_ref');
        $table->dropColumn('other_ref');
        $table->dropColumn('buyers_order_no');
        $table->dropColumn('buyers_order_date');
        $table->dropColumn('dispatch_document_no');
        $table->dropColumn('delivery_note_date');
        $table->dropColumn('dispatched_through');
        $table->dropColumn('destination');
        $table->dropColumn('terms_of_delivery');
    }
}
