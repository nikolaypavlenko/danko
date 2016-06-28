<?php

use yii\db\Migration;

/**
 * Handles adding position to table `tag`.
 */
class m160625_192543_add_position_to_tag extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->addColumn('tag', 'img', $this->string());
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropColumn('tag', 'img');
    }
}
