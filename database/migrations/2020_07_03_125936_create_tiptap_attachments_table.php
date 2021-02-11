<?php

use Arniro\Admin\Fields\Tiptap\Extensions\Attachment\AttachmentTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiptapAttachmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiptap_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('attachable_type')->nullable();
            $table->unsignedBigInteger('attachable_id')->nullable();
            $table->string('draft_id')->nullable()->index();
            $table->string('attachment');
            $table->string('url')->index();
            $table->string('type')->default(AttachmentTypes::FILE);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tiptap_attachments');
    }
}
