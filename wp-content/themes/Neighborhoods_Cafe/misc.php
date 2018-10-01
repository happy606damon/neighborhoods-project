				<?php
				if ($detect->isMobile()) {
					$id = 'mobile';
					$dataWidth = '250px';	
				}
				else if ($detect->isTablet()) {
					$id = 'ipad';
					$dataWidth = '300px';
				}
				else {
					$id = 'fb-full';
					$dataWidth = '500px';
				} 
			?>
			<div id="location-right">
				<div id="<?php echo $id; ?>">
						<div class="fb-page" data-href="https://www.facebook.com/NeighborhoodsCafe" data-tabs="timeline" data-width="<?php echo $dataWidth; ?>" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NeighborhoodsCafe"><a href="https://www.facebook.com/NeighborhoodsCafe">Neighborhoods Cafe</a></blockquote></div></div>
				</div><!--FB Full-->


				<div id="location-right">
				<div id="fb-full">
					<div class="fb-page" data-href="https://www.facebook.com/NeighborhoodsCafe" data-tabs="timeline" data-width="500px" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NeighborhoodsCafe"><a href="https://www.facebook.com/NeighborhoodsCafe">Neighborhoods Cafe</a></blockquote></div></div>
				</div><!--FB Full-->
				<div id="ipad">
					<div class="fb-page" data-href="https://www.facebook.com/NeighborhoodsCafe" data-tabs="timeline" data-width="300px" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NeighborhoodsCafe"><a href="https://www.facebook.com/NeighborhoodsCafe">Neighborhoods Cafe</a></blockquote></div></div>
				</div><!--FB iPad-->
				<div id="mobile">
					<div class="fb-page" data-href="https://www.facebook.com/NeighborhoodsCafe" data-tabs="timeline" data-width="250px" data-height="200px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/NeighborhoodsCafe"><a href="https://www.facebook.com/NeighborhoodsCafe">Neighborhoods Cafe</a></blockquote></div></div>
				</div><!--FB mobile-->


				<!-- stackoverflow.com/questions/23239157/get-browser-width-using-php/ -->