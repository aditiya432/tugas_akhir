<!doctype html>
<html lang="zxx">
<head>
	<title>Cassi</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cassi Photo Studio HTML Template">
	<meta name="keywords" content="photo, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/elegant-icons.css"/>
	<link rel="stylesheet" href="css/owl.carousel.min.css"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="css/style.css"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Offcanvas Menu Section -->
	<div class="offcanvas-menu-wrapper">
		<div class="menu-header">
			<a href="./home" class="site-logo">
				<img src="img/logo.png" alt="">
			</a>
			<div class="menu-switch" id="menu-canvas-close">
				<i class="icon_close"></i>
				<form action="{{ route('logout') }}" method="POST" class="d-flex"
role="search">
@csrf
@method('DELETE')
<button
 class="btn btn-danger" type="submit" style="border: 5px ">Logout</button>
</form>
			</div>
		</div>
			<div class="menu-footer">
			<div style="padding-left:100px;"class="footer-social">
				<a href="#">Facebook</a>
				<a href="#">Twitter</a>
				<a href="#">Instagram</a>
			</div>
			<div  class="copyright"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 <p></p> Copyright &copy;<script >document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
		</div>
	</div>
	<!-- Offcanvas Menu Section end -->
	
	<!-- Header section -->
	<header class="header-section">
		<a href="./home" class="site-logo">
			<img src="img/logo.png" alt="">
		</a>
		<div class="menu-switch" id="menu-canvas-show">
		<form action="{{ route('logout') }}" method="POST" class="d-flex"
role="search">
@csrf
@method('DELETE')
<button
 class="btn btn-danger" type="submit" style="border: 5px ">Logout</button>
</form>
		</div>

	</header>
	<!-- Header section end -->

<!-- Page content -->
<div class="content">
<div class="container mt-5">
<div class="row">
<div class="col-md-12">
<div>
<!-- <h3 class="text-center my-4">HALAMAN ADMIN</h3> -->
<hr>
</div>

<div class="card border-0 shadow-sm rounded">
<div class="card-body">
<form action='search' class='d-flex' role='search'>
                                <a href="{{ route('posts.create') }}" class="btn 
btn-md btn-success mb-3">TAMBAH
                                    POST</a>
                                
                                <input name="search" style="margin-left:34px;width:75%;height:36px;"
                                    class= "form-control me-1" type="search" placeholder="search" aria-label="Search">
                                <button style="margin-left:10px;height:40px;" class="btn btn-outline-success"
                                    type="sumbit">Serach</button>
                            </form>
<table class="table table-bordered">
<thead>
<tr>
<th scope="col">GAMBAR</th>
<th scope="col">JUDUL</th>
<th scope="col">CONTENT</th>
<th scope="col">AKSI</th>
</tr>
</thead>
<tbody>
@forelse ($posts as $post)
<tr>
<td class="text-center">
<img src="{{ asset('/storage/posts/'.$post->image) }}" class="rounded" style="width: 150px">
</td>
<td>{{ $post->title }}</td>
<td>{!! $post->content !!}</td>
<td class="text-center">
<form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('posts.destroy', $post->id) }}" method="POST">
<a href="{{ route('posts.show',$post->id) }}" class="btn btn-sm btn-dark">SHOW</a>
<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-sm btn-primary">EDIT</a>
@csrf
@method('DELETE')
<button type="submit"
class="btn btn-sm btn-danger">HAPUS</button>
</form>
</td>
</tr>
@empty
<div class="alert alert-danger">
Data Post belum Tersedia.
</div>
@endforelse
</tbody>
</table>
{{ $posts->links() }}
</div>
</div>
</div>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/masonry.pkgd.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>




