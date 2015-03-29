<?php
namespace App;

use \Slim\Slim as Slim;
use \Slim\Middleware\SessionCookie as SessionCookie;
use \Slim\Views\Blade as Blade;
use \Zeuxisoo\Whoops\Provider\Slim\WhoopsMiddleware as WhoopsMiddleware;

class Blog{

	protected $app;

	# Remove after configuring and seeding the database
	protected $fixture_posts = [[
		'id' => 1,
		'title' => 'First post',
		'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, veritatis, tempora, necessitatibus inventore nisi quam quia repellat ut tempore laborum possimus eum dicta id animi corrupti debitis ipsum officiis rerum.',
		'content' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut, tenetur natus doloremque laborum quos iste ipsum rerum obcaecati impedit odit illo dolorum ab tempora nihil dicta earum fugiat. Temporibus, voluptatibus.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, doloribus, dolorem iusto blanditiis unde eius illum consequuntur neque dicta incidunt ullam ea hic porro optio ratione repellat perspiciatis. Enim, iure!</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error, nostrum, aliquid, animi, ut quas placeat totam sunt tempora commodi nihil ullam alias modi dicta saepe minima ab quo voluptatem obcaecati?</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum, dolor quis. Sunt, ut, explicabo, aliquam tenetur ratione tempore quidem voluptates cupiditate voluptas illo saepe quaerat numquam recusandae? Qui, necessitatibus, est!</p>',
		'status' => 1,
		'comments' => [[
			'author' => 'Some guy',
			'email' => 'guy@somewhere.com',
			'message' => 'Hey, some guy has left a comment!',
			'status' => 1
		],
		[
			'author' => 'Other guy',
			'email' => 'otherguy@somewhereelse.com',
			'message' => 'trolololo',
			'status' => 0
		]],
		'new_comments' => 1,
	],[
		'id' => 2,
		'title' => 'Some interesting post',
		'description' => 'This is an interesting post, I sware!!',
		'content' => 'Nothing to see here.',
		'status' => 0,
		'comments' => [],
		'new_comments' => 0,
	]];

	public function __construct(){
		$this->app = new Slim([
			# Adds application settings
			'view' => new Blade(),
			'templates.path' => '../app/views'
		]);
		$this->app->add(new SessionCookie());
		$this->app->add(new WhoopsMiddleware);

		$views = $this->app->view();
		$views->parserOptions = [
			'debug' => true,
			'cache' => '../html_cache'
		];

		# Redirects from / to /links route 
		$this->app->get('/', function(){
			$this->app->redirect('/posts', 301);
		});

		# Redirects from / to /links route 
		$this->app->get('/admin', function(){
			$this->app->redirect('/admin/posts', 301);
		});

		# Defines a notFound error page
		$this->app->notFound(function(){
		    $this->app->render('errors.404');
		});
	}

	public function init(){
		# Front-End

		$this->app->get('/posts', function(){
			$posts = $this->fixture_posts;
			$this->app->render('posts.index', compact('posts'));
		});

		$this->app->get('/posts/1', function(){
			$post = $this->fixture_posts[0];
			$this->app->render('posts.show', compact('post'));
		});

		# Back-End

		$this->app->get('/admin/posts', function(){
			$posts = $this->fixture_posts;
			$this->app->render('admin.posts.index', compact('posts'));
		});

		$this->app->get('/admin/posts/1', function(){
			$post = $this->fixture_posts[0];
			$this->app->render('admin.posts.show', compact('post'));
		});

		$this->app->get('/admin/posts/create', function(){
			$this->app->render('admin.posts.create');
		});

		# start Slim
		$this->app->run();
	}
}