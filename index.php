<!--
Header Start
-->
<?php include 'header.php';?>
<!--
Header End
-->
<!--
Main Content Start
-->
<!--
Welcom Start
-->
<section id="hero" class="uk-height-medium pattern-overlay-1"></section>
<!--
Welcom End
-->
<!--
Breadcrumbs Start

<div class="container content-top-margin uk-light">
	<div class="row justify-content-between">
	    <div class="col-sm-auto">
		    <h3 class="kt-subheader__title">Dashboard</h3>
			<ul class="uk-breadcrumb">
				<li><a href="#">Item</a></li>
				<li><a href="#">Item</a></li>
				<li class="uk-disabled"><a>Disabled</a></li>
				<li><span>Active</span></li>
			</ul>
		</div>
	    <div class="col-sm-auto">
	        <nav class="nav align-items-center">
	            <a href="#" class="nav-item nav-link btn">
	            	Reports
	            </a>

	            <div class="nav-item nav-link btn dropdown dropdown-inline" data-toggle="kt-tooltip" title="" data-placement="top" data-original-title="Quick actions">
	                <a href="#" class="btn btn-warning" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                    Products
	                </a>
	                <div class="dropdown-menu dropdown-menu-right">
	                    <a class="dropdown-item" href="#"><i class="la la-plus"></i> New Product</a>
	                    <a class="dropdown-item" href="#"><i class="la la-user"></i> New Order</a>
	                    <a class="dropdown-item" href="#"><i class="la la-cloud-download"></i> New Download</a>
	                    <div class="dropdown-divider"></div>
	                    <a class="dropdown-item" href="#"><i class="la la-cog"></i> Settings</a>
	                </div>
	            </div>
	        </nav>
	    </div>
	</div>
</div>
-->

<div class="uk-container content-top-margin">
	<div class="uk-card uk-card-small uk-card-default uk-margin content">
		<ul uk-tab>
			<li><a href="#">SVL Gloabl</a></li>
			<li><a href="#">T-Pilots</a></li>
			<li><a href="#">Car Care</a></li>
			<li><a href="#">Promo Care</a></li>
			<li><a href="#">Pro Insure</a></li>
		</ul>

		<ul class="uk-switcher uk-margin uk-card-body">
			<li>
				<!--
				Charts Start
				-->
				<section id="select-topic">
					<div class="container-fluid">
						<div class="row mb-4">
							<div class="col-sm">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title ">All</h4>
										<div class="d-flex align-items-end">
											<h2 class="text-primary mr-2 mb-0">700</h2>
											<span class="info">0% of total issues in Pipeline</span>
										</div>
										<div id="lineChartContainer">
											<div id="undefined" class="recharts-responsive-container" style="width:100%;height:100%">
												<div class="recharts-wrapper" style="position: relative; cursor: default; height: 20px;">
													<svg class="recharts-surface" width="100%" height="20" viewBox="0 0 206 20" version="1.1"><defs><clipPath id="recharts2-clip"><rect x="5" y="5" height="10" width="196"></rect></clipPath></defs><defs><linearGradient id="gradient_area" x1="0" y1="0" x2="0" y2="1"><stop offset="25%" stop-color="#7987a1" stop-opacity="0.8"></stop><stop offset="75%" stop-color="#82ca9d" stop-opacity="0"></stop></linearGradient></defs><g class="recharts-layer recharts-area"><g class="recharts-layer"><defs><clipPath id="animationClipPath-recharts-area-3"><rect x="5" y="0" width="196" height="16"></rect></clipPath></defs><g class="recharts-layer" clip-path="url(#animationClipPath-recharts-area-3)"><g class="recharts-layer"><path fill="url(#gradient_area)" fill-opacity="0.6" points="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" width="196" height="10" type="linear" stroke="none" class="recharts-curve recharts-area-area" d="M5,14.583333333333334L15.31578947368421,14.583333333333334L25.63157894736842,14.583333333333334L35.94736842105263,14.166666666666666L46.26315789473684,14.583333333333334L56.578947368421055,5.416666666666666L66.89473684210526,14.583333333333334L77.21052631578948,14.583333333333334L87.52631578947368,13.75L97.84210526315789,12.916666666666666L108.15789473684211,12.5L118.47368421052632,12.916666666666666L128.78947368421052,6.25L139.10526315789474,12.916666666666666L149.42105263157896,12.083333333333332L159.73684210526315,10L170.05263157894737,9.166666666666666L180.3684210526316,10.416666666666668L190.68421052631578,7.083333333333334L201,11.666666666666668L201,15L190.68421052631578,15L180.3684210526316,15L170.05263157894737,15L159.73684210526315,15L149.42105263157896,15L139.10526315789474,15L128.78947368421052,15L118.47368421052632,15L108.15789473684211,15L97.84210526315789,15L87.52631578947368,15L77.21052631578948,15L66.89473684210526,15L56.578947368421055,15L46.26315789473684,15L35.94736842105263,15L25.63157894736842,15L15.31578947368421,15L5,15Z"></path><path stroke="#7987a1" fill="none" fill-opacity="0.6" points="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" width="196" height="10" class="recharts-curve recharts-area-curve" type="linear" d="M5,14.583333333333334L15.31578947368421,14.583333333333334L25.63157894736842,14.583333333333334L35.94736842105263,14.166666666666666L46.26315789473684,14.583333333333334L56.578947368421055,5.416666666666666L66.89473684210526,14.583333333333334L77.21052631578948,14.583333333333334L87.52631578947368,13.75L97.84210526315789,12.916666666666666L108.15789473684211,12.5L118.47368421052632,12.916666666666666L128.78947368421052,6.25L139.10526315789474,12.916666666666666L149.42105263157896,12.083333333333332L159.73684210526315,10L170.05263157894737,9.166666666666666L180.3684210526316,10.416666666666668L190.68421052631578,7.083333333333334L201,11.666666666666668"></path></g></g></g></g>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title ">Issues Solved</h4>
										<div class="d-flex align-items-end">
											<h2 class="text-warning mr-2 mb-0">610</h2>
											<span class="info">0% of total issues in Pipeline</span>
										</div>
										<div id="lineChartContainer">
											<div id="undefined" class="recharts-responsive-container" style="width:100%;height:100%">
												<div class="recharts-wrapper" style="position: relative; cursor: default; height: 20px;">
													<svg class="recharts-surface" width="100%" height="20" viewBox="0 0 206 20" version="1.1"><defs><clipPath id="recharts2-clip"><rect x="5" y="5" height="10" width="196"></rect></clipPath></defs><defs><linearGradient id="gradient_area" x1="0" y1="0" x2="0" y2="1"><stop offset="25%" stop-color="#7987a1" stop-opacity="0.8"></stop><stop offset="75%" stop-color="#82ca9d" stop-opacity="0"></stop></linearGradient></defs><g class="recharts-layer recharts-area"><g class="recharts-layer"><defs><clipPath id="animationClipPath-recharts-area-3"><rect x="5" y="0" width="196" height="16"></rect></clipPath></defs><g class="recharts-layer" clip-path="url(#animationClipPath-recharts-area-3)"><g class="recharts-layer"><path fill="url(#gradient_area)" fill-opacity="0.6" points="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" width="196" height="10" type="linear" stroke="none" class="recharts-curve recharts-area-area" d="M5,14.583333333333334L15.31578947368421,14.583333333333334L25.63157894736842,14.583333333333334L35.94736842105263,14.166666666666666L46.26315789473684,14.583333333333334L56.578947368421055,5.416666666666666L66.89473684210526,14.583333333333334L77.21052631578948,14.583333333333334L87.52631578947368,13.75L97.84210526315789,12.916666666666666L108.15789473684211,12.5L118.47368421052632,12.916666666666666L128.78947368421052,6.25L139.10526315789474,12.916666666666666L149.42105263157896,12.083333333333332L159.73684210526315,10L170.05263157894737,9.166666666666666L180.3684210526316,10.416666666666668L190.68421052631578,7.083333333333334L201,11.666666666666668L201,15L190.68421052631578,15L180.3684210526316,15L170.05263157894737,15L159.73684210526315,15L149.42105263157896,15L139.10526315789474,15L128.78947368421052,15L118.47368421052632,15L108.15789473684211,15L97.84210526315789,15L87.52631578947368,15L77.21052631578948,15L66.89473684210526,15L56.578947368421055,15L46.26315789473684,15L35.94736842105263,15L25.63157894736842,15L15.31578947368421,15L5,15Z"></path><path stroke="#7987a1" fill="none" fill-opacity="0.6" points="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" width="196" height="10" class="recharts-curve recharts-area-curve" type="linear" d="M5,14.583333333333334L15.31578947368421,14.583333333333334L25.63157894736842,14.583333333333334L35.94736842105263,14.166666666666666L46.26315789473684,14.583333333333334L56.578947368421055,5.416666666666666L66.89473684210526,14.583333333333334L77.21052631578948,14.583333333333334L87.52631578947368,13.75L97.84210526315789,12.916666666666666L108.15789473684211,12.5L118.47368421052632,12.916666666666666L128.78947368421052,6.25L139.10526315789474,12.916666666666666L149.42105263157896,12.083333333333332L159.73684210526315,10L170.05263157894737,9.166666666666666L180.3684210526316,10.416666666666668L190.68421052631578,7.083333333333334L201,11.666666666666668"></path></g></g></g></g>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title ">Issues Solved</h4>
										<div class="d-flex align-items-end">
											<h2 class="text-danger mr-2 mb-0">520</h2>
											<span class="info">0% of total issues in Pipeline</span>
										</div>
										<div id="lineChartContainer">
											<div id="undefined" class="recharts-responsive-container" style="width:100%;height:100%">
												<div class="recharts-wrapper" style="position: relative; cursor: default; height: 20px;">
													<svg class="recharts-surface" width="100%" height="20" viewBox="0 0 206 20" version="1.1"><defs><clipPath id="recharts2-clip"><rect x="5" y="5" height="10" width="196"></rect></clipPath></defs><defs><linearGradient id="gradient_area" x1="0" y1="0" x2="0" y2="1"><stop offset="25%" stop-color="#7987a1" stop-opacity="0.8"></stop><stop offset="75%" stop-color="#82ca9d" stop-opacity="0"></stop></linearGradient></defs><g class="recharts-layer recharts-area"><g class="recharts-layer"><defs><clipPath id="animationClipPath-recharts-area-3"><rect x="5" y="0" width="196" height="16"></rect></clipPath></defs><g class="recharts-layer" clip-path="url(#animationClipPath-recharts-area-3)"><g class="recharts-layer"><path fill="url(#gradient_area)" fill-opacity="0.6" points="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" width="196" height="10" type="linear" stroke="none" class="recharts-curve recharts-area-area" d="M5,14.583333333333334L15.31578947368421,14.583333333333334L25.63157894736842,14.583333333333334L35.94736842105263,14.166666666666666L46.26315789473684,14.583333333333334L56.578947368421055,5.416666666666666L66.89473684210526,14.583333333333334L77.21052631578948,14.583333333333334L87.52631578947368,13.75L97.84210526315789,12.916666666666666L108.15789473684211,12.5L118.47368421052632,12.916666666666666L128.78947368421052,6.25L139.10526315789474,12.916666666666666L149.42105263157896,12.083333333333332L159.73684210526315,10L170.05263157894737,9.166666666666666L180.3684210526316,10.416666666666668L190.68421052631578,7.083333333333334L201,11.666666666666668L201,15L190.68421052631578,15L180.3684210526316,15L170.05263157894737,15L159.73684210526315,15L149.42105263157896,15L139.10526315789474,15L128.78947368421052,15L118.47368421052632,15L108.15789473684211,15L97.84210526315789,15L87.52631578947368,15L77.21052631578948,15L66.89473684210526,15L56.578947368421055,15L46.26315789473684,15L35.94736842105263,15L25.63157894736842,15L15.31578947368421,15L5,15Z"></path><path stroke="#7987a1" fill="none" fill-opacity="0.6" points="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" width="196" height="10" class="recharts-curve recharts-area-curve" type="linear" d="M5,14.583333333333334L15.31578947368421,14.583333333333334L25.63157894736842,14.583333333333334L35.94736842105263,14.166666666666666L46.26315789473684,14.583333333333334L56.578947368421055,5.416666666666666L66.89473684210526,14.583333333333334L77.21052631578948,14.583333333333334L87.52631578947368,13.75L97.84210526315789,12.916666666666666L108.15789473684211,12.5L118.47368421052632,12.916666666666666L128.78947368421052,6.25L139.10526315789474,12.916666666666666L149.42105263157896,12.083333333333332L159.73684210526315,10L170.05263157894737,9.166666666666666L180.3684210526316,10.416666666666668L190.68421052631578,7.083333333333334L201,11.666666666666668"></path></g></g></g></g>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title ">Issues Solved</h4>
										<div class="d-flex align-items-end">
											<h2 class="text-success mr-2 mb-0">430</h2>
											<span class="info">0% of total issues in Pipeline</span>
										</div>
										<div id="lineChartContainer">
											<div id="undefined" class="recharts-responsive-container" style="width:100%;height:100%">
												<div class="recharts-wrapper" style="position: relative; cursor: default; height: 20px;">
													<svg class="recharts-surface" width="100%" height="20" viewBox="0 0 206 20" version="1.1"><defs><clipPath id="recharts2-clip"><rect x="5" y="5" height="10" width="196"></rect></clipPath></defs><defs><linearGradient id="gradient_area" x1="0" y1="0" x2="0" y2="1"><stop offset="25%" stop-color="#7987a1" stop-opacity="0.8"></stop><stop offset="75%" stop-color="#82ca9d" stop-opacity="0"></stop></linearGradient></defs><g class="recharts-layer recharts-area"><g class="recharts-layer"><defs><clipPath id="animationClipPath-recharts-area-3"><rect x="5" y="0" width="196" height="16"></rect></clipPath></defs><g class="recharts-layer" clip-path="url(#animationClipPath-recharts-area-3)"><g class="recharts-layer"><path fill="url(#gradient_area)" fill-opacity="0.6" points="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" width="196" height="10" type="linear" stroke="none" class="recharts-curve recharts-area-area" d="M5,14.583333333333334L15.31578947368421,14.583333333333334L25.63157894736842,14.583333333333334L35.94736842105263,14.166666666666666L46.26315789473684,14.583333333333334L56.578947368421055,5.416666666666666L66.89473684210526,14.583333333333334L77.21052631578948,14.583333333333334L87.52631578947368,13.75L97.84210526315789,12.916666666666666L108.15789473684211,12.5L118.47368421052632,12.916666666666666L128.78947368421052,6.25L139.10526315789474,12.916666666666666L149.42105263157896,12.083333333333332L159.73684210526315,10L170.05263157894737,9.166666666666666L180.3684210526316,10.416666666666668L190.68421052631578,7.083333333333334L201,11.666666666666668L201,15L190.68421052631578,15L180.3684210526316,15L170.05263157894737,15L159.73684210526315,15L149.42105263157896,15L139.10526315789474,15L128.78947368421052,15L118.47368421052632,15L108.15789473684211,15L97.84210526315789,15L87.52631578947368,15L77.21052631578948,15L66.89473684210526,15L56.578947368421055,15L46.26315789473684,15L35.94736842105263,15L25.63157894736842,15L15.31578947368421,15L5,15Z"></path><path stroke="#7987a1" fill="none" fill-opacity="0.6" points="[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object],[object Object]" width="196" height="10" class="recharts-curve recharts-area-curve" type="linear" d="M5,14.583333333333334L15.31578947368421,14.583333333333334L25.63157894736842,14.583333333333334L35.94736842105263,14.166666666666666L46.26315789473684,14.583333333333334L56.578947368421055,5.416666666666666L66.89473684210526,14.583333333333334L77.21052631578948,14.583333333333334L87.52631578947368,13.75L97.84210526315789,12.916666666666666L108.15789473684211,12.5L118.47368421052632,12.916666666666666L128.78947368421052,6.25L139.10526315789474,12.916666666666666L149.42105263157896,12.083333333333332L159.73684210526315,10L170.05263157894737,9.166666666666666L180.3684210526316,10.416666666666668L190.68421052631578,7.083333333333334L201,11.666666666666668"></path></g></g></g></g>
													</svg>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row my-2">
							<div class="col-sm-3">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Nationality</h4>
										<div id="pieChartContainer">
											<div id="undefined" class="recharts-responsive-container" style="width:100%;height:100%">
												<div class="recharts-wrapper pieChart" style="position: relative; cursor: default; width: 262px; height: 300px;">
													<svg cx="50%" cy="50%" class="recharts-surface" width="262" height="300" viewBox="0 0 262 300" version="1.1"><defs><clipPath id="recharts19-clip"><rect x="5" y="5" height="234" width="252"></rect></clipPath></defs><g class="recharts-layer recharts-pie"><g class="recharts-layer"><g class="recharts-layer recharts-pie-sector"><path name=" Indian" cx="131" cy="122" fill="#0088FE" stroke="#fff" class="recharts-sector" d="M 231,122
    A 100,100,0,
    1,0,
    179.13790724697827,209.65125147926477
  L 155.06895362348914,165.8256257396324
            A 50,50,0,
            1,1,
            181,122 Z"></path></g><g class="recharts-layer recharts-pie-sector"><path name="Foreign National" cx="131" cy="122" fill="#00C49F" stroke="#fff" class="recharts-sector" d="M 179.13790724697827,209.65125147926477
    A 100,100,0,
    0,0,
    231,122.00000000000003
  L 181,122.00000000000001
            A 50,50,0,
            0,1,
            155.06895362348914,165.8256257396324 Z"></path></g></g></g></svg>
													<div class="recharts-legend-wrapper" style="position: absolute; width: 252px; height: auto; left: 5px; bottom: 5px;">
														<ul class="recharts-default-legend" style="padding: 0px; margin: 0px; text-align: center;">
															<li class="recharts-legend-item legend-item-0" style="display: inline-block; margin-right: 10px;">
																<svg class="recharts-surface" width="14" height="14" viewBox="0 0 32 32" version="1.1" style="display: inline-block; vertical-align: middle; margin-right: 4px;"><path fill="#0088FE" cx="16" cy="16" type="circle" class="recharts-symbols" transform="translate(16, 16)" d="M16,0A16,16,0,1,1,-16,0A16,16,0,1,1,16,0"></path></svg><span class="recharts-legend-item-text"><span class="pieChartLegendLabel"> Indian </span><span class="pieChartLegendValue">122 </span><span style="color: rgb(0, 136, 254);"> 83%</span></span></li><li class="recharts-legend-item legend-item-1" style="display: inline-block; margin-right: 10px;"><svg class="recharts-surface" width="14" height="14" viewBox="0 0 32 32" version="1.1" style="display: inline-block; vertical-align: middle; margin-right: 4px;"><path fill="#00C49F" cx="16" cy="16" type="circle" class="recharts-symbols" transform="translate(16, 16)" d="M16,0A16,16,0,1,1,-16,0A16,16,0,1,1,16,0"></path></svg><span class="recharts-legend-item-text"><span class="pieChartLegendLabel">Foreign National </span><span class="pieChartLegendValue">25 </span><span style="color: rgb(0, 196, 159);"> 17%</span></span></li></ul></div><div class="recharts-tooltip-wrapper recharts-tooltip-wrapper-right recharts-tooltip-wrapper-bottom" style="pointer-events: none; visibility: hidden; position: absolute; top: 0px; transform: translate(76.4525px, 93.8081px);"><div class="recharts-default-tooltip" style="margin: 0px; padding: 10px; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); white-space: nowrap;"><p class="recharts-tooltip-label" style="margin: 0px;"></p></div></div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Services</h4>
										<div id="verticalBarChartContainer" class="chartDimensions">
											<div id="undefined" class="recharts-responsive-container" style="width:100%;height:100%">
												<div class="recharts-wrapper" style="position: relative; cursor: default; width: 100%; height: 355px;">
													<svg class="recharts-surface" width="574" height="355" viewBox="0 0 574 355" version="1.1"><defs><clipPath id="recharts22-clip"><rect x="95" y="5" height="315" width="449"></rect></clipPath></defs><g class="recharts-cartesian-grid"><g class="recharts-cartesian-grid-horizontal"><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="14.84375" x2="544" y2="14.84375"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="34.53125" x2="544" y2="34.53125"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="54.21875" x2="544" y2="54.21875"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="73.90625" x2="544" y2="73.90625"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="93.59375" x2="544" y2="93.59375"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="113.28125" x2="544" y2="113.28125"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="132.96875" x2="544" y2="132.96875"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="152.65625" x2="544" y2="152.65625"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="172.34375" x2="544" y2="172.34375"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="192.03125" x2="544" y2="192.03125"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="211.71875" x2="544" y2="211.71875"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="231.40625" x2="544" y2="231.40625"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="251.09375" x2="544" y2="251.09375"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="270.78125" x2="544" y2="270.78125"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="290.46875" x2="544" y2="290.46875"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="310.15625" x2="544" y2="310.15625"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="5" x2="544" y2="5"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="320" x2="544" y2="320"></line></g><g class="recharts-cartesian-grid-vertical"><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="95" y1="5" x2="95" y2="320"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="207.25" y1="5" x2="207.25" y2="320"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="319.5" y1="5" x2="319.5" y2="320"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="431.75" y1="5" x2="431.75" y2="320"></line><line stroke="#f5f5f5" fill="none" x="95" y="5" width="449" height="315" offset="[object Object]" x1="544" y1="5" x2="544" y2="320"></line></g></g><g class="recharts-layer recharts-cartesian-axis recharts-xAxis xAxis"><line class="recharts-xAxis xAxis" type="number" orientation="bottom" width="449" height="30" x="95" y="320" viewBox="[object Object]" stroke="#666" fill="none" x1="95" y1="320" x2="544" y2="320"></line><g class="recharts-cartesian-axis-ticks"><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-xAxis xAxis" type="number" orientation="bottom" width="449" height="30" x="95" y="320" viewBox="[object Object]" stroke="#666" fill="none" x1="95" y1="326" x2="95" y2="320"></line><text type="number" orientation="bottom" width="449" height="30" x="95" y="328" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="middle"><tspan x="95" dy="0.71em">0</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-xAxis xAxis" type="number" orientation="bottom" width="449" height="30" x="95" y="320" viewBox="[object Object]" stroke="#666" fill="none" x1="207.25" y1="326" x2="207.25" y2="320"></line><text type="number" orientation="bottom" width="449" height="30" x="207.25" y="328" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="middle"><tspan x="207.25" dy="0.71em">15</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-xAxis xAxis" type="number" orientation="bottom" width="449" height="30" x="95" y="320" viewBox="[object Object]" stroke="#666" fill="none" x1="319.5" y1="326" x2="319.5" y2="320"></line><text type="number" orientation="bottom" width="449" height="30" x="319.5" y="328" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="middle"><tspan x="319.5" dy="0.71em">30</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-xAxis xAxis" type="number" orientation="bottom" width="449" height="30" x="95" y="320" viewBox="[object Object]" stroke="#666" fill="none" x1="431.75" y1="326" x2="431.75" y2="320"></line><text type="number" orientation="bottom" width="449" height="30" x="431.75" y="328" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="middle"><tspan x="431.75" dy="0.71em">45</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-xAxis xAxis" type="number" orientation="bottom" width="449" height="30" x="95" y="320" viewBox="[object Object]" stroke="#666" fill="none" x1="544" y1="326" x2="544" y2="320"></line><text type="number" orientation="bottom" width="449" height="30" x="544" y="328" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="middle"><tspan x="544" dy="0.71em">60</tspan></text></g></g></g><g class="recharts-layer recharts-cartesian-axis recharts-yAxis yAxis"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="95" y1="5" x2="95" y2="320"></line><g class="recharts-cartesian-axis-ticks"><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="14.84375" x2="95" y2="14.84375"></line><text type="category" orientation="left" width="60" height="315" x="87" y="14.84375" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="-0.145em">Andhra</tspan><tspan x="87" dy="1em">Pradesh</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="34.53125" x2="95" y2="34.53125"></line><text type="category" orientation="left" width="60" height="315" x="87" y="34.53125" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Delhi</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="54.21875" x2="95" y2="54.21875"></line><text type="category" orientation="left" width="60" height="315" x="87" y="54.21875" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Haryana</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="73.90625" x2="95" y2="73.90625"></line><text type="category" orientation="left" width="60" height="315" x="87" y="73.90625" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">J&amp;K</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="93.59375" x2="95" y2="93.59375"></line><text type="category" orientation="left" width="60" height="315" x="87" y="93.59375" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Karnataka</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="113.28125" x2="95" y2="113.28125">
													</line><text type="category" orientation="left" width="60" height="315" x="87" y="113.28125" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Kerala</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="132.96875" x2="95" y2="132.96875"></line><text type="category" orientation="left" width="60" height="315" x="87" y="132.96875" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Ladakh</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="152.65625" x2="95" y2="152.65625"></line><text type="category" orientation="left" width="60" height="315" x="87" y="152.65625" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Maharashtra</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="172.34375" x2="95" y2="172.34375"></line><text type="category" orientation="left" width="60" height="315" x="87" y="172.34375" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Odisha</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="192.03125" x2="95" y2="192.03125"></line><text type="category" orientation="left" width="60" height="315" x="87" y="192.03125" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Punjab</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="211.71875" x2="95" y2="211.71875"></line><text type="category" orientation="left" width="60" height="315" x="87" y="211.71875" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Rajasthan</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="231.40625" x2="95" y2="231.40625"></line><text type="category" orientation="left" width="60" height="315" x="87" y="231.40625" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="-0.145em">Tamil</tspan><tspan x="87" dy="1em">Nadu</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="251.09375" x2="95" y2="251.09375"></line><text type="category" orientation="left" width="60" height="315" x="87" y="251.09375" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Telangana</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="270.78125" x2="95" y2="270.78125"></line><text type="category" orientation="left" width="60" height="315" x="87" y="270.78125" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="-0.145em">Uttar</tspan><tspan x="87" dy="1em">Pradesh</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="290.46875" x2="95" y2="290.46875"></line><text type="category" orientation="left" width="60" height="315" x="87" y="290.46875" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="0.355em">Uttarakhand</tspan></text></g><g class="recharts-layer recharts-cartesian-axis-tick"><line class="recharts-yAxis yAxis" type="category" orientation="left" width="60" height="315" x="35" y="5" viewBox="[object Object]" stroke="#666" fill="none" x1="89" y1="310.15625" x2="95" y2="310.15625"></line><text type="category" orientation="left" width="60" height="315" x="87" y="310.15625" viewBox="[object Object]" stroke="none" fill="#666" class="recharts-text recharts-cartesian-axis-tick-value" text-anchor="end"><tspan x="87" dy="-0.145em">West</tspan><tspan x="87" dy="1em">Bengal</tspan></text></g></g></g><g class="recharts-layer recharts-bar"><g class="recharts-layer recharts-bar-rectangles"><g class="recharts-layer"><g class="recharts-layer recharts-bar-rectangle"><path name="Andhra Pradesh" width="7.48333333333332" height="17.71875" color="#00ffcc" x="95" y="5" fill="#00ffcc" radius="0" class="recharts-rectangle" d="M 95,5 h 7.48333333333332 v 17.71875 h -7.48333333333332 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Delhi" width="74.83333333333331" height="17.71875" color="#00C49F" x="95" y="24.6875" fill="#00C49F" radius="0" class="recharts-rectangle" d="M 95,24.6875 h 74.83333333333331 v 17.71875 h -74.83333333333331 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Haryana" width="119.73333333333335" height="17.71875" color="#ffcc99" x="95" y="44.375" fill="#ffcc99" radius="0" class="recharts-rectangle" d="M 95,44.375 h 119.73333333333335 v 17.71875 h -119.73333333333335 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="J&amp;K" width="22.450000000000003" height="17.71875" color="#DCDCDC" x="95" y="64.0625" fill="#DCDCDC" radius="0" class="recharts-rectangle" d="M 95,64.0625 h 22.450000000000003 v 17.71875 h -22.450000000000003 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Karnataka" width="82.31666666666666" height="17.71875" color="#ccff33" x="95" y="83.75" fill="#ccff33" radius="0" class="recharts-rectangle" d="M 95,83.75 h 82.31666666666666 v 17.71875 h -82.31666666666666 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Kerala" width="202.05" height="17.71875" color="#0088FE" x="95" y="103.4375" fill="#0088FE" radius="0" class="recharts-rectangle" d="M 95,103.4375 h 202.05 v 17.71875 h -202.05 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Ladakh" width="59.866666666666674" height="17.71875" color="#d5c7e2" x="95" y="123.125" fill="#d5c7e2" radius="0" class="recharts-rectangle" d="M 95,123.125 h 59.866666666666674 v 17.71875 h -59.866666666666674 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Maharashtra" width="306.81666666666666" height="17.71875" color="#cc6600" x="95" y="142.8125" fill="#cc6600" radius="0" class="recharts-rectangle" d="M 95,142.8125 h 306.81666666666666 v 17.71875 h -306.81666666666666 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Odisha" width="7.48333333333332" height="17.71875" color="#993333" x="95" y="162.5" fill="#993333" radius="0" class="recharts-rectangle" d="M 95,162.5 h 7.48333333333332 v 17.71875 h -7.48333333333332 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Punjab" width="7.48333333333332" height="17.71875" color="#ffff66" x="95" y="182.1875" fill="#ffff66" radius="0" class="recharts-rectangle" d="M 95,182.1875 h 7.48333333333332 v 17.71875 h -7.48333333333332 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Rajasthan" width="29.933333333333337" height="17.71875" color="#FF8042" x="95" y="201.875" fill="#FF8042" radius="0" class="recharts-rectangle" d="M 95,201.875 h 29.933333333333337 v 17.71875 h -29.933333333333337 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Tamil Nadu" width="7.48333333333332" height="17.71875" color="#AFEEEE" x="95" y="221.5625" fill="#AFEEEE" radius="0" class="recharts-rectangle" d="M 95,221.5625 h 7.48333333333332 v 17.71875 h -7.48333333333332 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Telangana" width="37.41666666666666" height="17.71875" color="#FFBB28" x="95" y="241.25" fill="#FFBB28" radius="0" class="recharts-rectangle" d="M 95,241.25 h 37.41666666666666 v 17.71875 h -37.41666666666666 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="Uttar Pradesh" width="119.73333333333335" height="17.71875" color="#DDA0DD" x="95" y="260.9375" fill="#DDA0DD" radius="0" class="recharts-rectangle" d="M 95,260.9375 h 119.73333333333335 v 17.71875 h -119.73333333333335 Z"></path></g><g class="recharts-layer recharts-bar-rectangle">
													<path name="Uttarakhand" width="7.48333333333332" height="17.71875" color="#ffccff" x="95" y="280.625" fill="#ffccff" radius="0" class="recharts-rectangle" d="M 95,280.625 h 7.48333333333332 v 17.71875 h -7.48333333333332 Z"></path></g><g class="recharts-layer recharts-bar-rectangle"><path name="West Bengal" width="7.48333333333332" height="17.71875" color="#df9f9f" x="95" y="300.3125" fill="#df9f9f" radius="0" class="recharts-rectangle" d="M 95,300.3125 h 7.48333333333332 v 17.71875 h -7.48333333333332 Z"></path></g></g></g></g>
													</svg>
													<div class="recharts-tooltip-wrapper recharts-tooltip-wrapper-left recharts-tooltip-wrapper-bottom" style="pointer-events: none; visibility: hidden; position: absolute; top: 0px; transform: translate(454.109px, 123.281px);">
														<div class="recharts-default-tooltip" style="margin: 0px; padding: 10px; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); white-space: nowrap;">
															<p class="recharts-tooltip-label" style="margin: 0px;">Kerala</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-3">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">Nationality</h4>
										<div id="pieChartContainer">
											<div id="undefined" class="recharts-responsive-container" style="width:100%;height:100%">
												<div class="recharts-wrapper pieChart" style="position: relative; cursor: default; width: 262px; height: 300px;">
													<svg cx="50%" cy="50%" class="recharts-surface" width="262" height="300" viewBox="0 0 262 300" version="1.1"><defs><clipPath id="recharts24-clip"><rect x="5" y="5" height="246" width="252"></rect></clipPath></defs><g class="recharts-layer recharts-pie"><g class="recharts-layer"><g class="recharts-layer recharts-pie-sector"><path name="Imported" cx="131" cy="128" fill="#66a4fbd9" stroke="#fff" class="recharts-sector" d="M 231,128 A 100,100,0, 1,0, 37.52755498931687,163.53733281669884 L 84.26377749465843,145.76866640834942 A 50,50,0, 1,1, 181,128 Z"></path></g><g class="recharts-layer recharts-pie-sector"><path name="Local" cx="131" cy="128" fill="#ff7c8fd9" stroke="#fff" class="recharts-sector" d="M 37.52755498931687,163.53733281669884 A 100,100,0, 0,0, 231,128.00000000000003 L 181,128 A 50,50,0, 0,1, 84.26377749465843,145.76866640834942 Z"></path></g></g></g></svg>
													<div class="recharts-legend-wrapper" style="position: absolute; width: 252px; height: auto; left: 5px; bottom: 5px;">
														<ul class="recharts-default-legend" style="padding: 0px; margin: 0px; text-align: center;">
															<li class="recharts-legend-item legend-item-0" style="display: inline-block; margin-right: 10px;"><svg class="recharts-surface" width="14" height="14" viewBox="0 0 32 32" version="1.1" style="display: inline-block; vertical-align: middle; margin-right: 4px;"><path fill="#66a4fbd9" cx="16" cy="16" type="circle" class="recharts-symbols" transform="translate(16, 16)" d="M16,0A16,16,0,1,1,-16,0A16,16,0,1,1,16,0"></path></svg><span class="recharts-legend-item-text"><span class="pieChartLegendLabel">Imported </span><span class="pieChartLegendValue">82 </span><span style="color: rgba(102, 164, 251, 0.85);"> 56%</span></span></li><li class="recharts-legend-item legend-item-1" style="display: inline-block; margin-right: 10px;"><svg class="recharts-surface" width="14" height="14" viewBox="0 0 32 32" version="1.1" style="display: inline-block; vertical-align: middle; margin-right: 4px;"><path fill="#ff7c8fd9" cx="16" cy="16" type="circle" class="recharts-symbols" transform="translate(16, 16)" d="M16,0A16,16,0,1,1,-16,0A16,16,0,1,1,16,0"></path></svg><span class="recharts-legend-item-text"><span class="pieChartLegendLabel">Local </span><span class="pieChartLegendValue">65 </span><span style="color: rgba(255, 124, 143, 0.85);"> 44%</span></span></li></ul></div><div class="recharts-tooltip-wrapper recharts-tooltip-wrapper-right recharts-tooltip-wrapper-bottom" style="pointer-events: none; visibility: hidden; position: absolute; top: 0px; transform: translate(127.451px, 64.2341px);">
																<div class="recharts-default-tooltip" style="margin: 0px; padding: 10px; background-color: rgb(255, 255, 255); border: 1px solid rgb(204, 204, 204); white-space: nowrap;">
																	<p class="recharts-tooltip-label" style="margin: 0px;"></p>
																</div>
															</div>
												</div>
												<div></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--
				Charts End
				-->
			</li>
			<li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
			<li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
		</ul>
	</div>
</div>

<!--
Tickets Start
-->
<div class="question-area themeix-ptb">
        <div class="container">
            <div class="row">
                <!-- Start Question -->
                <div class="col-md-9">
                    <div class="questions-wrapper">
                        <div class="dwqa-container">
                            <div class="dwqa-questions-archive">
                                <form id="dwqa-search" class="dwqa-search">
                                    <input data-nonce="fc987a6f77" type="text" placeholder="What do you want to know?" name="qs" class="ui-autocomplete-input" autocomplete="off" required="">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                                <div class="dwqa-question-filter">
                                    <span>Filter:</span>
                                    <ul>
                                        <li><a href="#" class="active">All</a></li>
                                        <li><a href="#" class="uk-text-danger">Open</a></li>
                                        <li><a href="#" class="uk-text-primary">Resolved</a></li>
                                        <li><a href="#" class="uk-text-success">Closed</a></li>
                                        <li><a href="#" class="uk-text-warning">Unanswered</a></li>
                                    </ul>
                                    <label for="dwqa-sort-by" class="dwqa-sort-by">
                                        <select id="dwqa-sort-by">
                                            <option disabled="">Sort by</option>
                                            <option value="/dwqa/?sort=views">Views</option>
                                            <option selected="selected" value="/dwqa/?sort=answers">Answers</option>
                                            <option value="/dwqa/?sort=votes">Votes</option>
                                        </select>
                                    </label>
                                </div>
                                <div class="dwqa-questions-list">
                                    <div class="dwqa-question-item dwqa-sticky">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-open" title="Open">Open</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                    <div class="dwqa-question-item">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-answered" title="Open">Open</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                    <div class="dwqa-question-item">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-answered" title="answered">Answered</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                    <div class="dwqa-question-item">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-resolved" title="resolved">Resolved</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                    <div class="dwqa-question-item">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-closed" title="closed">Closed</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                    <div class="dwqa-question-item">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-answered" title="Open">Open</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                    <div class="dwqa-question-item">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-answered" title="answered">Answered</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                    <div class="dwqa-question-item">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-resolved" title="resolved">Resolved</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                    <div class="dwqa-question-item">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-closed" title="closed">Closed</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                    <div class="dwqa-question-item">
                                        <header class="dwqa-question-title">
                                            <a href="#">How to pin a sticky question to the top of the questions page?</a>
                                        </header>
                                        <div class="dwqa-question-meta">
                                            <span class="dwqa-status dwqa-status-closed" title="closed">Closed</span>
                                            <span><a href="#">Kiki Ralp</a> answered 1 year ago</span>
                                            <span class="dwqa-question-category"> • <a href="#" rel="tag">Technical</a></span>
                                        </div>
                                        <div class="dwqa-question-stats">
                                            <span class="dwqa-views-count"><strong>24904</strong>views</span>
                                            <span class="dwqa-answers-count"><strong>7</strong>answers</span>
                                            <span class="dwqa-votes-count"><strong>4</strong>votes</span>
                                        </div>
                                    </div>
                                </div>
                                <ul class="uk-pagination" uk-margin>
									<li><a href="#"><span uk-pagination-previous></span></a></li>
									<li><a href="#">1</a></li>
									<li class="uk-disabled"><span>...</span></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">6</a></li>
									<li class="uk-active"><span>7</span></li>
									<li><a href="#">8</a></li>
									<li><a href="#">9</a></li>
									<li><a href="#">10</a></li>
									<li class="uk-disabled"><span>...</span></li>
									<li><a href="#">20</a></li>
									<li><a href="#"><span uk-pagination-next></span></a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Question -->
                <!-- Start Blog Sidebar -->
                <div class="col-md-3">
                    <div class="uk-card uk-card-small uk-card-default uk-margin" id="services_chart"></div>
                    <div class="uk-card uk-card-small uk-card-default" id="services_solved"></div>
                </div>
                <!-- End Blog Sidebar -->
            </div>
        </div>
    </div>
<!--
Tickets End
-->
<!--
Social Comments Start
-->
<section class="py-5 bg-light">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="fb-comment-embed" data-href="https://www.facebook.com/zuck/posts/10102577175875681?comment_id=1193531464007751&amp;reply_comment_id=654912701278942" data-include-parent="true"></div>
			</div>
			<div class="col-sm-6">
				<div class="fb-comment-embed" data-href="https://www.facebook.com/zuck/posts/10102577175875681?comment_id=1193531464007751&amp;reply_comment_id=654912701278942" data-width="" data-include-parent="true"></div>
			</div>
		</div>
	</div>
</section>
<!--
Social Comments Start
-->
<!--
Main Content End
-->
<!--
Footer Start
-->
<?php include 'footer.php';?>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Year', 'Sales', 'Expenses'],
	  ['2013',  1000,      400],
	  ['2014',  1170,      460],
	  ['2015',  660,       1120],
	  ['2016',  1030,      540]
	]);

	var options = {
	  title: 'Company Performance',
	  hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
	  vAxis: {minValue: 0}
	};

	var chart = new google.visualization.AreaChart(document.getElementById('chart_div_1'));
	chart.draw(data, options);
  }
</script>
<script>
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawMultSeries);

function drawMultSeries() {
      var data = google.visualization.arrayToDataTable([
        ['City', '2010 Population', '2000 Population'],
        ['New York City, NY', 8175000, 8008000],
        ['Los Angeles, CA', 3792000, 3694000],
        ['Chicago, IL', 2695000, 2896000],
        ['Houston, TX', 2099000, 1953000],
        ['Philadelphia, PA', 1526000, 1517000]
      ]);

      var options = {
        title: 'Population of Largest U.S. Cities',
        chartArea: {width: '50%'},
        hAxis: {
          title: 'Total Population',
          minValue: 0
        },
        vAxis: {
          title: 'City'
        }
      };

      var chart = new google.visualization.BarChart(document.getElementById('chart_div_2'));
      chart.draw(data, options);
    }
</script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

	var data = google.visualization.arrayToDataTable([
	  ['Task', 'Hours per Day'],
	  ['Work',     11],
	  ['Eat',      2],
	  ['Commute',  2],
	  ['Watch TV', 2],
	  ['Sleep',    7]
	]);

	var options = {
	  title: 'Services VS Issues'
	};

	var chart = new google.visualization.PieChart(document.getElementById('services_chart'));

	chart.draw(data, options);
  }
</script>
<script type="text/javascript">
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  function drawChart() {

	var data = google.visualization.arrayToDataTable([
	  ['Task', 'Hours per Day'],
	  ['Work',     11],
	  ['Eat',      2],
	  ['Commute',  2],
	  ['Watch TV', 2],
	  ['Sleep',    7]
	]);

	var options = {
	  title: 'Services Solved'
	};

	var chart = new google.visualization.PieChart(document.getElementById('services_solved'));

	chart.draw(data, options);
  }
</script>
<!--
Footer Start
-->