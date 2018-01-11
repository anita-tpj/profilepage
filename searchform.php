<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">

      <label>
          <div class="input-group">
        <input type="search" class="form-control"
            placeholder="<?php echo esc_attr_x( 'Search …', 'profilepage' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label><span class="input-group-btn">
    <input type="submit" class="btn btn-warning"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
      </span>
      </div>
</form>
