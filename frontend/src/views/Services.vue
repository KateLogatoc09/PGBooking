<template>
	<div>

<heady/>
<servicebanner/>
<service/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import servicebanner from"@/components/inc/servicebanner.vue";
import service from"@/components/content/service.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,servicebanner,service,footerr
  }
};
</script>