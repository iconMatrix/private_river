<?php

  /**
   * Activity River privacy
	* modifies the riverdashboard so that it
	* only shows frinds or mine - no relationships, profile changes etc
	*based on 1.7.8 Elgg code
	*@author Steve Aquila
	* iconmatrix.com
   */

  function remove_all_from_river_init() {

	// just a placeholder
  }


  register_elgg_event_handler('init', 'system', 'remove_all_from_river_init');

?>
