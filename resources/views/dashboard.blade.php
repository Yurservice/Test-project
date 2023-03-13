<x-main-layout>
	<x-slot name="title">User profile</x-slot>
	<x-slot name="description">This is the user profile page</x-slot>
	<x-slot name="robots">index, follow</x-slot>
	<x-slot name="center">
		<div class="main">
<div id="notification"></div>

<div class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
<div class="breadcrumb__wrapper">
<div class="breadcrumb__row">
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a class="breadcrumb__link" itemprop="item" href="https://it-rating.com/">
<span itemprop="name"><em class="fa fa-home"></em></span>
</a>
<meta itemprop="position" content="1">
</span>
<span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
<a class="breadcrumb__link" itemprop="item" href="https://it-rating.com/my-account/">
<span itemprop="name">Account</span>
</a>
<meta itemprop="position" content="1">
</span>
<span class="breadcrumb__link breadcrumb__link_current">User profile</span>
</div>
</div>
</div>

<div class="main__page-wrap" style='margin-bottom:100px'>
<div class="columns">
<div class="content">
<div class="authorization authorization_login">
<h1 class="authorization__heading">Your profile</h1>
<div class="authorization__row">
<div class="authorization__left">

<div class="field formBlcok__field formBlcok__field_col12">
<div class="field__name">Name:</div>
<div class="field__inp">
<input type="text" name="email" placeholder="" value="TestUser">
</div>
</div>
<div class="field formBlcok__field formBlcok__field_col12">
<div class="field__name">E-Mail:</div>
<div class="field__inp">
<input type="text" name="email" placeholder="" value="testemail@mail.com">
</div>
</div>
<div class="field formBlcok__field formBlcok__field_col12">
<div class="field__name">Avatar:</div>
<div class="field__inp">
<img src='/images/passport_shout.webp' style='width: 85px'>
</div>
</div>

</div>
<div class="authorization__right">
<div class="authorization__info">

<div class="authorization__headingLight"><br></div><div class="authorization__txt"></div> </div>
</div>
</div>
</div>

</div>

</div>
</div>



</div>
	</x-slot>
</x-main-layout>