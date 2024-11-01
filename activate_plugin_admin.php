<div class="updated" style="padding: 0; margin: 0; border: none; background: none;">
  <form id="stockdio_historical_activate" name="stockdio_historical_activate" action="<?php echo esc_url( StockdioSettingsPage::get_page_url() ); ?>" method="POST">
    <div class="stockdio_activate">
      <div class="stockdio_link_container"><a class="button" href="#" onclick="document.stockdio_historical_activate.submit();" >
        <?php esc_html_e('Activate your Stockdio Historical Charts plugin', 'Stockdio');?>
        </a></div>
      <span class="aa_description">
      <?php _e('Almost done - activate your account', 'Stockdio');?>
      </span> <a href="http://services.stockdio.com/signup?wp=1" target="_activatestockdio" >
      <?php esc_html_e(' Get my Api-Key', 'Stockdio');?>
      </a> </div>
  </form>
</div>