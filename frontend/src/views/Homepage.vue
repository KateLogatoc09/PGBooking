<template>
	<div>

<heady/>
<navy/>
<bgsearch/>
<service/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import navy from"@/components/inc/navy.vue";
import bgsearch from"@/components/inc/bgsearch.vue";
import service from"@/components/content/service.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,navy,bgsearch,service,footerr
  }
};
</script>