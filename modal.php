<!-- Modal -->
<div class="modal fade" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="mainModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body" style="text-align:left;">
				<div class="modal-img">
					<span class="modal-img__text"></span>
				</div>
				<div class="modal-txt"></div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn--primary" data-dismiss="modal"><?php echo get_theme_mod( 'modal-btn-text', 'Sluiten' ); ?></button>
                <a type="button" class="btn btn--primary btn__more btn--hide" href=""> <?php echo get_theme_mod( 'modal-btn-2-text', 'Lees Meer' ); ?> </a>
			</div>
		</div>
	</div>
</div>