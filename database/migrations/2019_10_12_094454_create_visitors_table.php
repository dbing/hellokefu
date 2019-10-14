<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('visitor_id',128)->unique()->nullable(false)->comment('访客编号 系统生成');
            $table->integer('user_id',false,true)->nullable(false)->comment('客服');
            $table->integer('app_id',false,true)->nullable(false)->comment('应用主键ID');
            $table->integer('visit_number',false,true)->nullable(false)->comment('会话次数');
            $table->integer('unread_number',false,true)->nullable(false)->comment('未读消息数');
            $table->string('name',50)->nullable(false)->nullable(false)->comment('姓名');
            $table->date('age')->nullable(false)->comment('年龄');
            $table->tinyInteger('sex',false,false)->nullable(false)->comment('性别');
            $table->string('company',60)->nullable(false)->comment('公司');
            $table->string('qq',30)->nullable(false)->comment('QQ');
            $table->string('wechat',60)->nullable(false)->comment('微信');
            $table->string('mobile',30)->nullable(false)->comment('手机号');
            $table->string('email',60)->nullable(false)->comment('邮箱');
            $table->string('address',120)->nullable(false)->comment('地址');
            $table->string('remark',255)->nullable(false)->comment('备注');
            $table->string('region',60)->nullable(false)->comment('地区');
            $table->string('ip',60)->nullable(false)->comment('IP');
            $table->string('user_agent',60)->nullable(false)->comment('终端信息');
            $table->string('lasted_message',255)->nullable(false)->comment('最近消息');
            $table->timestamp('lasted_at')->nullable()->comment('最近出现时间');
            $table->index('visitor_id');
            $table->index('user_id');
            $table->index('app_id');
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
        Schema::dropIfExists('visitors');
    }
}