<template>
	<div>

<heady/>
<contactbanner/>
<contactus/>
<footerr/>

  
	</div>
  </template>
  <script>

import heady from"@/components/heady.vue";
import contactbanner from"@/components/inc/contactbanner.vue";
import contactus from"@/components/content/contactus.vue";
import footerr from"@/components/inc/footerr.vue";
export default {
  components: {
    heady,contactbanner,contactus,footerr
  }
};
</script>