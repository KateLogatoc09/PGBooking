<template>
	<div id="app">

<add/>
<div id="wrapper">
<navy/>
<div id="content-wrapper" class="d-flex flex-column">
  <div id="content">
<tbar/>
<tables/>
</div>
</div>
</div>
<foot/>

</div>
 </template>

<script>
import add from"@/components/Admin/add.vue";
import navy from"@/components/Admin/navy.vue";
import tbar from"@/components/Admin/topbar.vue";
import foot from"@/components/Admin/footer.vue";
import tables from"@/components/Admin/table.vue";
export default {
  components: {
     tables, add, navy, tbar, foot
  }
};
</script>