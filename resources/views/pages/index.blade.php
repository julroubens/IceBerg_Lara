@extends('layouts/master') @section('content') @include('layouts/_nav')

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-8 col-md-12">
							<h1>
								Votre sante, notre priorite		
							</h1>
							<p class="pt-10 pb-10 text-white">
								Vous avez du mal à trouver l'hopital, la pharmacie, le clinique ou le médecin qu'il faut?</br>
								Vous ne ne voulez plus passer des heures dans les lignes d'attentes?</br>
								Vous amereriez rester chez vous et contacter un médecin en cas de besoin?</br>
								Vous souhaitez vous former en secourisme afin de sauver des vies?</br>						
							</p>
							<a href="{{asset('../welcome')}}" class="primary-btn text-uppercase">Santé Haïti est la solution</a>
						</div>										
					</div>
				</div>					
			</section>
			<!-- End banner Area -->

		