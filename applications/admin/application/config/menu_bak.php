<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');
$config = array(
    'menu' => array(

        '报名管理' => array(
            'code' => 'sign_manage',
            'icon' => 'icon-asterisk menu-i',
            'list' => array(
                array(
                    'url'=>'/moteusers',
                   'name'=> '模特报名人员',
                   'active'=> 'mote_list'
                ),
                array(
                    'url'=>'/speakusers',
                   'name'=> '演说家报名人员',
                   'active'=> 'speak_list'
                ),
				 array(
                    'url'=>'/registerusers',
                    'name'=> '活动报名人员',
                    'active'=> 'register_list'
                ),
            )
        ),

        'H5后台数据' => array(
            'code' => 'question_manage',
            'icon' => 'icon-asterisk menu-i',
            'list' => array(
                array(
                   'url'=>'/questionusers',
                   'name'=> '调查参与人员',
                   'active'=> 'question_list'
                ),
				 array(
                   'url'=>'/fireworks',
                   'name'=> '中奖人员',
                   'active'=> 'fireworks_list'
                ),
				array(
                   'url'=>'/run',
                   'name'=> '助力(逃离寒冬)',
                   'active'=> 'run_list'
                ),
				array(
                   'url'=>'/puzzleusers',
                   'name'=> '拼图游戏抢门票',
                   'active'=> 'puzzle_users_list'
                ),
				
				array(
                   'url'=>'/questionnaire',
                   'name'=> '国宾府调查问卷',
                   'active'=> 'questionnaire_list'
                ),
            ),
		),
		'微活动' => array(
            'code' => 'weixin_manage',
            'icon' => 'icon-asterisk menu-i',
            'list' => array(
               array(
					   'url'=>'/yanhua',
					   'name'=> '烟花',
					   'active'=> 'yanhua_list'
					),
            ),
		),

        // '管理员管理' => array(
        //     'code' => 'admin_user_manage',
        //     'icon' => 'glyphicon glyphicon-user menu-i',
        //     'list' => array(
        //         array(
        //             'url' => '/admin',
        //             'name' => '管理员列表',
        //             'active' => 'admin_list'
        //         ),
        //         array(
        //             'url' => '/admingroup',
        //             'name' => '角色管理',
        //             'active' => 'group_list'
        //         ),
        //         array(
        //             'url' => '/adminspurview',
        //             'name' => '权限管理',
        //             'active' => 'purview'
        //         ) 
        //     ) 
        // ),
    ) 
);