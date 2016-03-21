<?php
namespace Home\Controller;
use Think\Controller;

class UserController extends Controller{
	
	function login(){
		if(isset($_POST['submit'])){
			dump($_POST);	
			$user = M('admin');	
// 			$Content['username'] = I('post.username');
// 			$Content['pwd'] = I('post.pwd');
			$username= I('post.username','','mysql_real_escape_string');
			$pwd= I('post.pwd','','mysql_real_escape_string');
			$arr = $user -> where("username = '$username'") -> find();
			echo "$username";
			dump($arr);
			die;
			if($arr){
				if($arr['pwd'] == md5($pwd)){
					session('uid',$arr['user_id']);
					session('uname',$arr['username']);
					
					$this -> success('登陆成功',U('Index/index','',''));//定向网页
					
				}
				else{
					$this -> error('密码错误');
					die;
				}
			}else{
				$this -> error('没有这个人');
				die;
			}
		}
		
		$this -> display();
	}
	function logout(){
		if(!session('?uid')){
			redirect(U('User/login','',''),1,'');
			die;
		}
		session(null);
		$this -> success('退出成功',U('User/login','',''));
	}
	
}

