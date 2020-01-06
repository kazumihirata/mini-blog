<?php

class MiniBlogApplication extends Application {
    /**
     * @var array $login_action
     */
    protected $login_action = array('account', 'signin');

    /**
     * @return string
     */
    public function getRootDir()
    {
        return dirname(__FILE__);
    }

    /**
     * @return array
     */
    protected function registerRoutes()
    {
        return array();
    }

    /**
     * アプリケーションの設定を行う
     */
    protected function configure()
    {
        $this->db_manager->connect(
            'master', array(
                'dsn'      => 'mysql:dbname=mini_blog;host=localhost',
                'user'     => 'root',
                'password' => '',
            )
        );
    }
}
