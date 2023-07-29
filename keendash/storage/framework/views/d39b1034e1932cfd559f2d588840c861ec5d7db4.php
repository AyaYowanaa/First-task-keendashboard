<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="<?php echo e(URL::asset('assets/plugins/global/plugins.bundle.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/js/scripts.bundle.js')); ?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="<?php echo e(URL::asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')); ?>"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="<?php echo e(URL::asset('assets/plugins/custom/datatables/datatables.bundle.js')); ?>"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="<?php echo e(URL::asset('assets/js/widgets.bundle.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/js/custom/apps/chat/chat.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/js/custom/utilities/modals/upgrade-plan.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/js/custom/utilities/modals/create-campaign.js')); ?>"></script>
		<script src="<?php echo e(URL::asset('assets/js/custom/utilities/modals/users-search.js')); ?>"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
<?php echo $__env->yieldContent('scripts'); ?><?php /**PATH C:\xampp\htdocs\keendash\resources\views/layouts/footer-scripts.blade.php ENDPATH**/ ?>