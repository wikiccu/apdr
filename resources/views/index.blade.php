@extends('layouts.app')
@section('title') صفحه نخست @endsection
@section('content')
    <div id="container">
		<!-- Header
		    ================================================== -->
		<header class="clearfix">
			<!-- Static navbar -->
			<div class="navbar navbar-default navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button> 
						<a class="navbar-brand" href="#"><img alt="" src="{{ asset ('images/logo.png') }}" /></a>
					</div>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="contact-nav" href="#contact">تماس</a></li>
                            <li><a class="about-nav" href="#about">درباره</a></li>
                            <li><a class="testimonials-nav" href="#testimonials">از زبان مشتریان</a></li>
                            <li><a class="services-nav" href="#services">خدمات</a></li>
                            <li><a class="portfolio-nav" href="#portfolio">مقام</a></li>
                            <li><a class="home-nav active" href="#home">خانه</a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header -->

		<!-- home-section 
			================================================== -->
		<div class="section">
			<div id="home">
				<div id="slider">
					<!--
					#################################
						- THEMEPUNCH BANNER -
					#################################
					-->

					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
								<!-- THE FIRST SLIDE -->
								<li data-transition="3dcurtain-vertical" data-slotamount="10" data-masterspeed="300">
									<!-- THE MAIN IMAGE IN THE FIRST SLIDE -->
									<img src="{{ asset('upload/slide1.jpg') }}" />

									<!-- THE CAPTIONS IN THIS SLDIE -->
									<div class="caption large_text sfb" data-x="15" data-y="100" data-speed="600" data-start="1200" data-easing="easeOutExpo" data-end="7000" data-endspeed="300" data-endeasing="easeInSine">سلام و به استقبال <span style="color: #ffd83d; font-weight: 700"> Flatible</span></div>

									<div class="caption big_white sft stt" data-x="15" data-y="140" data-speed="500" data-start="1400" data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine">این یک تخت سبک طراحی تک صفحه برای شرکت سرد خود را است</div>

									<div class="caption randomrotate" data-x="15" data-y="192" data-speed="600" data-start="1600" data-easing="easeOutExpo" data-end="7300" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('images/slider-icons/slider-icon1.png') }}" alt="Image 2" /></div>

									<div class="caption randomrotate" data-x="145" data-y="192" data-speed="600" data-start="1800" data-easing="easeOutExpo" data-end="7400" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('images/slider-icons/slider-icon2.png') }}" alt="Image 3" /></div>

									<div class="caption randomrotate" data-x="275" data-y="192" data-speed="600" data-start="2000" data-easing="easeOutExpo" data-end="7500" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('images/slider-icons/slider-icon3.png') }}" alt="Image 4" /></div>

									<div class="caption randomrotate" data-x="415" data-y="192" data-speed="600" data-start="2300" data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('images/slider-icons/slider-icon4.png') }}" alt="Image 5" /></div>

									<div class="caption randomrotate" data-x="560" data-y="300" data-speed="600" data-start="2700" data-easing="easeOutExpo" data-end="7800" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('images/slider-icons/arrow-big.png') }}" alt="Image 6" /></div>

									<div class="caption randomrotate" data-x="660" data-y="290" data-speed="700" data-start="3000" data-easing="easeOutExpo" data-end="7900" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('images/slider-icons/arrow-middle.png') }}" alt="Image 7" /></div>

									<div class="caption randomrotate" data-x="713" data-y="265" data-speed="600" data-start="3300" data-easing="easeOutExpo" data-end="8000" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('images/slider-icons/arrow-small.png') }}" alt="Image 8" /></div>

									<div class="caption randomrotate" data-x="785" data-y="117" data-speed="800" data-start="3700" data-easing="easeOutExpo" data-end="8300" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('images/slider-icons/ipad.png') }}" alt="Image 9" /></div>

									<div class="caption randomrotate" data-x="820" data-y="145" data-speed="600" data-start="4000" data-easing="easeOutExpo" data-end="8300" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('upload/photo-ipad.jpg') }}" alt="Image 10" /></div>
								</li>
								<!-- THE second SLIDE -->
								<li data-transition="papercut" data-slotamount="15" data-masterspeed="300">
									<!-- THE MAIN IMAGE IN THE second SLIDE -->
									<img src="{{ asset('upload/slide1.jpg') }}" />

									<!-- THE CAPTIONS IN THIS SLDIE -->
									<div class="caption large_text sfb" data-x="15" data-y="100" data-speed="600" data-start="1200" data-easing="easeOutExpo" data-end="7000" data-endspeed="300" data-endeasing="easeInSine">تخت سبک <span style="color: #ffd83d; font-weight: 700">  طرح</span></div>

									<div class="caption big_white sft stt" data-x="15" data-y="140" data-speed="500" data-start="1400" data-easing="easeOutExpo" data-end="7100" data-endspeed="300" data-endeasing="easeInSine">ناله طرح نما نشستن آمت در حال حاضر بارداری خود ، نئون</div>

									<div class="caption randomrotate" data-x="15" data-y="192" data-speed="600" data-start="1600" data-easing="easeOutExpo" data-end="7300" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon5.png" alt="Image 2" /></div>

									<div class="caption randomrotate" data-x="128" data-y="192" data-speed="600" data-start="1800" data-easing="easeOutExpo" data-end="7400" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon6.png" alt="Image 3" /></div>

									<div class="caption randomrotate" data-x="240" data-y="192" data-speed="600" data-start="2000" data-easing="easeOutExpo" data-end="7500" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon7.png" alt="Image 4" /></div>

									<div class="caption randomrotate" data-x="352" data-y="192" data-speed="600" data-start="2300" data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon8.png" alt="Image 5" /></div>

									<div class="caption randomrotate" data-x="465" data-y="192" data-speed="600" data-start="2600" data-easing="easeOutExpo" data-end="7700" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon9.png" alt="Image 5" /></div>

									<div class="caption randomrotate" data-x="650" data-y="75" data-speed="800" data-start="3200" data-easing="easeOutExpo" data-end="8000" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/mac.png" alt="Image 9" /></div>

									<div class="caption randomrotate" data-x="669" data-y="93" data-speed="600" data-start="3700" data-easing="easeOutExpo" data-end="8100" data-endspeed="300" data-endeasing="easeInSine"><img src="{{ asset('upload/photo-mac.jpg') }}" alt="Image 10" /></div>
								</li>
								<!-- THE third SLIDE -->
								<li data-transition="turnoff" data-slotamount="1" data-masterspeed="300">
									<!-- THE MAIN IMAGE IN THE third SLIDE -->
									<img src="{{ asset('upload/slide1.jpg') }}" />

									<div class="caption randomrotate" data-x="225" data-y="130" data-speed="600" data-start="800" data-easing="easeOutExpo" data-end="7300" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon10.png" alt="Image 2" /></div>

									<div class="caption randomrotate" data-x="360" data-y="130" data-speed="600" data-start="1100" data-easing="easeOutExpo" data-end="7400" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon11.png" alt="Image 3" /></div>

									<div class="caption randomrotate" data-x="488" data-y="130" data-speed="600" data-start="1400" data-easing="easeOutExpo" data-end="7500" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon12.png" alt="Image 4" /></div>

									<div class="caption randomrotate" data-x="615" data-y="130" data-speed="600" data-start="1700" data-easing="easeOutExpo" data-end="7600" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon13.png" alt="Image 5" /></div>

									<div class="caption randomrotate" data-x="750" data-y="130" data-speed="600" data-start="2000" data-easing="easeOutExpo" data-end="7700" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon14.png" alt="Image 5" /></div>

									<div class="caption randomrotate" data-x="877" data-y="130" data-speed="600" data-start="2300" data-easing="easeOutExpo" data-end="7700" data-endspeed="300" data-endeasing="easeInSine"><img src="images/slider-icons/slider-icon15.png" alt="Image 5" /></div>

									<!-- THE CAPTIONS IN THIS SLDIE -->
									<div class="caption large_text sfb" data-x="350" data-y="260" data-speed="600" data-start="3000" data-easing="easeOutExpo" data-end="8000" data-endspeed="300" data-endeasing="easeInSine">کد پاک & # 38؛ خوب <span style="color: #ffd83d; font-weight: 700">مستند</span></div>

									<div class="caption big_white sft stt" data-x="427" data-y="296" data-speed="500" data-start="3400" data-easing="easeOutExpo" data-end="8100" data-endspeed="300" data-endeasing="easeInSine">Flatible است بسیار آسان برای استفاده و سفارشی</div>

									<div class="caption lfr medium_text" data-x="532" data-y="350" data-speed="600" data-start="3800" data-easing="easeOutExpo" data-end="8200" data-endspeed="300" data-endeasing="easeInSine"><a href="#">بیشتر بدانید</a></div>
								</li>
							</ul>
							<div class="tp-bannertimer tp-bottom"></div>
						</div>
					</div>
				</div>
				
				<div class="home-posts">
					<div class="container">
						<div class="row">
							<div class="col-md-4 home-post">
								<a class="green" href="#"><img alt="" src="images/icon1.png" /></a>
								<h2>طراحی تخت</h2>
								<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . ها Lorem آمت Aenean که نوشیدن</p>
							</div>
							<div class="col-md-4 home-post">
								<a class="red" href="#"><img alt="" src="images/icon2.png" /></a>
								<h2>به روز رسانی اعلان</h2>
								<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . ها Lorem آمت Aenean که نوشیدن</p>
							</div>
							<div class="col-md-4 home-post">
								<a class="yellow" href="#"><img alt="" src="images/icon3.png" /></a>
								<h2>کد بهینه شده</h2>
								<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . ها Lorem آمت Aenean که نوشیدن</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End home -->


		<!-- portfolio-section 
			================================================== -->
		<div class="section">
			<div id="portfolio" class="bg-color">
				<div class="container">
					<div class="title-section">
						<h1>پروژه های اخیر</h1>
						<p>FlatProin آرزوهای خود را به نویسندهوضعیت موز باردار . Nunc آمت ها Lorem quis نوشیدن نویسنده، مگر این که مهارت بسیار حرفه ای ، و یا فلشچت تصویری با پژوهش . اما این طراحی نفرت</p>
					</div>
					<ul class="filter">
						<li><a href="#" class="active" data-filter="*">همه دسته بندی ها</a></li>
						<li><a href="#" data-filter=".web-design">طراحی وب سایت</a></li>
						<li><a href="#" data-filter=".photography">عکاسی</a></li>
						<li><a href="#" data-filter=".nature">طبیعت</a></li>
						<li><a href="#" data-filter=".logo">لوگو</a></li>
						<li><a href="#" data-filter=".brochures">بروشور</a></li>
						<li><a href="#" data-filter=".business-card">کارت کسب و کار</a></li>
					</ul>

					<div class="projects-container">
						<div class="project-post web-design nature logo">
							<img alt="" src="{{ asset('upload/1.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post nature photography business-card">
							<img alt="" src="{{ asset('upload/2.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>						
							</div>
						</div>
						<div class="project-post web-design photography">
							<img alt="" src="{{ asset('upload/3.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>flat icons</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post logo brochures business-card">
							<img alt="" src="{{ asset('upload/4.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post photography logo business-card">
							<img alt="" src="{{ asset('upload/5.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post web-design nature">
							<img alt="" src="{{ asset('upload/6.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post web-design logo">
							<img alt="" src="{{ asset('upload/7.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post photography brochures">
							<img alt="" src="{{ asset('upload/8.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post web-design nature business-card">
							<img alt="" src="{{ asset('upload/9.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post web-design photography">
							<img alt="" src="{{ asset('upload/10.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post logo brochures business-card">
							<img alt="" src="{{ asset('upload/11.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژه</a>								
								</div>							
							</div>
						</div>
						<div class="project-post brochures business-card">
							<img alt="" src="{{ asset('upload/12.jpg') }}" />
							<div class="project-content">
								<div class="inner-project">
									<h3>آیکن های مفید بهینه سازی</h3>
									<span>آیکون های تخت</span>
									<a class="link-project" href="#first-popup">مشخصات پروژهt</a>								
								</div>							
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<!-- End portfolio -->


		<!-- services-section 
			================================================== -->
		<div class="section">
			<div id="services">
				<div class="container">
					<div class="title-section">
						<h1>خدمات ما</h1>
						<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . Nunc آمت ها Lorem quis نوشیدن نویسنده، مگر این که مهارت بسیار حرفه ای ، و یا فلشچت تصویری با پژوهش . اما این نفرت</p>
					</div>
					<ul class="cbp-ig-grid">
						<li>
							<a href="#">
								<span class="cbp-ig-icon cbp-ig-icon-cloud"></span>
								<h3 class="cbp-ig-title">ابر سرور</h3>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="cbp-ig-icon cbp-ig-icon-lovely"></span>
								<h3 class="cbp-ig-title">طراحی دوست داشتنی</h3>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="cbp-ig-icon cbp-ig-icon-support"></span>
								<h3 class="cbp-ig-title">24/7 پشتیبانی</h3>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="cbp-ig-icon cbp-ig-icon-form"></span>
								<h3 class="cbp-ig-title">فرم کار</h3>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="cbp-ig-icon cbp-ig-icon-friendly"></span>
								<h3 class="cbp-ig-title">کاربر پسند</h3>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="cbp-ig-icon cbp-ig-icon-coustomizable"></span>
								<h3 class="cbp-ig-title">آسان ریزی</h3>
							</a>
						</li>
					</ul>
				</div>
			</div>			
		</div>
		<!-- End services -->

		<!-- testimonials-section 
			================================================== -->
		<div class="section">
			<div id="testimonials" class="bg-color">
				<div class="container">
					<div class="title-section">
						<h1>مشتریان مشتری</h1>
					</div>

					<ul class="bxslider">
						<li>
							<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . Nunc آمت ها Lorem quis نوشیدن نویسنده، مگر این که مهارت بسیار حرفه ای ، و یا فلشچت تصویری با پژوهش . اما با این فیلم بسیاری از نفرت، adipiscing consectetuer است </p>
							<img alt="" src="images/image1.png" />
							<span>کارفرما مبارک</span>
						</li>
						<li>
							<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . Nunc آمت ها Lorem quis نوشیدن نویسنده، مگر این که مهارت بسیار حرفه ای ، و یا فلشچت تصویری با پژوهش .</p>
							<img alt="" src="images/image2.png" />
							<span>کارفرما مبارک 2</span>
						</li>
						<li>
							<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . Nunc آمت ها Lorem quis نوشیدن نویسنده، مگر این که مهارت بسیار حرفه ای ، و یا فلشچت تصویری با پژوهش . اما با این فیلم بسیاری از نفرت، adipiscing consectetuer است </p>
							<img alt="" src="images/image1.png" />
							<span>کارفرما مبارک 3</span>
						</li>
						<li>
							<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . Nunc آمت ها Lorem quis نوشیدن نویسنده، مگر این که مهارت بسیار حرفه ای ، و یا فلشچت تصویری با پژوهش .</p>
							<img alt="" src="images/image2.png" />
							<span>کارفرما مبارک 4</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- End testimonials -->

		<!-- about-section 
			================================================== -->
		<div class="section">
			<div id="about">
				<div class="container">
					<div class="title-section">
						<h1>در باره</h1>
						<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . Nunc آمت ها Lorem quis نوشیدن نویسنده، مگر این که مهارت بسیار حرفه ای ، و یا فلشچت تصویری با پژوهش . اما این نفرت</p>
					</div>
					<div class="row team">
						<div class="col-md-4">
							<div class="team-member">
								<img alt="" src="images/team-member1.png" />
								<div class="team-cont">
									<h3>سعید رستمی</h3>
									<span>برنامه نویس</span>
									<ul class="social">
										<li><a class="fb" href="#"></a></li>
										<li><a class="twi" href="#"></a></li>
										<li><a class="drib" href="#"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-member">
								<img alt="" src="images/team-member2.png" />
								<div class="team-cont">
									<h3>مهندس هادی روشن</h3>
									<span>مدیریت</span>
									<ul class="social">
										<li><a class="fb" href="#"></a></li>
										<li><a class="twi" href="#"></a></li>
										<li><a class="drib" href="#"></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="team-member">
								<img alt="" src="images/team-member3.png" />
								<div class="team-cont">
								<h3>مهندس محسن شعبانیان</h3>
									<span>برنامه نویس ارشد</span>
									<ul class="social">
										<li><a class="fb" href="#"></a></li>
										<li><a class="twi" href="#"></a></li>
										<li><a class="drib" href="#"></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

					<div class="row who-we-are">
						<div class="col-md-6">
							<h2>ما که هستیم</h2>
							<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . Nunc آمت ها Lorem quis نوشیدن نویسنده، مگر این که مهارت بسیار حرفه ای ، و یا فلشچت تصویری با </ P >
<P> لایه موروی از یک مدل است. در واقع، نه زمین ما از نویسنده فوتبالنفرت Tincidunt با نفرت است . اما آن را نشانی از نویسنده از زندگی و توسعه فوتبال در بازی کمک کند . گشتاور Nulla استخدام برای ازدواج، ELIT adipiscing consectetur ما . این فیلم فقط بود. سس پروتئین Nullam urna AC اتحادیه اروپا Felis از در حال پخشتبلیغاتی . اما نه برای رقابت . اما مگر که تامین مالی . در حال حاضر سس مایکروفر (مایکروویو) گرم . </p>
						</div>

						<div class="col-md-6">
							<h2>Our Skills</h2>
							<div class="progres-bar">
								<div class="inner-progress photoshop">
									<span>فتوشاپ</span>
								</div>
							</div>
							<div class="progres-bar">
								<div class="inner-progress html">
									<span>HTML</span>
								</div>
							</div>
							<div class="progres-bar">
								<div class="inner-progress php">
									<span>PHP</span>
								</div>
							</div>
							<div class="progres-bar">
								<div class="inner-progress ruby">
									<span>یاقوت</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<!-- End about -->

		<!-- contact-section 
			================================================== -->
		<div class="section">
			<div id="contact" class="bg-color">
				<div class="container">
					<div class="title-section">
						<h1>در تماس بودن</h1>
						<p>Proin تعداد بارداری مایل به نویسندهوضعیت موز . Nunc آمت ها Lorem quis نوشیدن نویسنده، مگر این که مهارت بسیار حرفه ای ، و یا فلشچت تصویری با پژوهش . اما این نفرت</p>
					</div>
				</div>
				<div class="map"></div>
				<div class="container">
					<div class="row contact-info">
						<div class="col-md-6">
							<h2>اطلاعات تماس</h2>
							<ul>
								<li><span class="label address">آدرس :</span> <span class="label-information">صندوق پستی 16122 کالینز غرب خیابان ویکتوریا 8007 استرالیا</span></li>
								<li><span class="label phone">تلفن :</span> <span class="label-information">(900) 1234 5678 900</span></li>
								<li><span class="label e-mail">آدرس ایمیل :</span> <span class="label-information">youremail@yourdomain.com</span></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h2>ما ارسال یک پیام</h2>
							<form id="contact-form" />
								<div class="row">
									<div class="col-md-6">
										<input name="name" id="name" type="text" placeholder="نام" />
										<input name="mail" id="mail" type="text" placeholder="ایمیل" />
										<input name="subject" id="subject" type="text" placeholder="موضوع" />
									</div>

									<div class="col-md-6">
										<textarea name="comment" id="comment" placeholder="پیام"></textarea>
										<input type="submit" id="submit_contact" value="پیام فرستادن" />
										<div id="msg" class="message"></div>
									</div>
								</div>
							</form>						
						</div>
					</div>					
				</div>
			</div>
		</div>
		<!-- End contact -->

		<!-- Footer
		    ================================================== -->
		<footer class="bg-color">
			<div class="inner-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-7">
							<p>و کپی . 2013 Flatible PSD قالب</p>
                            <h5>ویرایشگر شهاب محمدخانلو</h5>
						</div>
						<div class="col-md-5">
							<ul class="social-icons">
								<li><a class="facebook" href="#"></a></li>
								<li><a class="rss" href="#"></a></li>
								<li><a class="youtube" href="#"></a></li>
								<li><a class="twitter" href="#"></a></li>
								<li><a class="google" href="#"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

	</div>
@endsection