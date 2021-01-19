<div class="bootstrap snippets bootdey">
	<div class="row">
		<div class="col-md-12">
			<div class="blog-comment">
				<hr/>
				@foreach($comment as $comm)
				<ul class="comments">
					<li class="clearfix">
						<img src="https://bootdey.com/img/Content/user_2.jpg" class="avatar" alt="">
						<div class="post-comments">
							<p class="meta">Dec 19, 2014 <a href="#">{{$comm->customer_name}}</a> says :</p>
						<p>
							{{ $comm->comment_body}}
						</p>
					</div>
				</li>
			</ul>
			@endforeach
		</div>
	</div>
</div>
</div>