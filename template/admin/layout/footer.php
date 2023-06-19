 <!--Page Body Ends-->
 </div>
    <!--Page Body Ends-->

</div>
<!--page-wrapper Ends-->

<!-- latest jquery-->
<script src="<?= asset('public/admin-panel/assets/js/jquery-3.2.1.min.js')?>" ></script>

<!-- Bootstrap js-->
<script src="<?= asset('public/admin-panel/assets/js/bootstrap/bootstrap.bundle.min.js')?>" ></script>

<!-- Sidebar jquery-->
<script src="<?= asset('public/admin-panel/assets/js/sidebar-menu.js')?>" ></script>

<!-- prism js -->
<script src="<?= asset('public/admin-panel/assets/js/prism/prism.min.js')?>"></script>

<!-- clipboard js -->
<script src="<?= asset('public/admin-panel/assets/js/clipboard/clipboard.min.js')?>" ></script>

<!-- custom card js  -->
<script src="<?= asset('public/admin-panel/assets/js/custom-card/custom-card.js')?>" ></script>

<!-- Theme js--><!--Datatable js-->
<script src="<?= asset('public/admin-panel/assets/js/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?= asset('public/admin-panel/assets/js/datatables/datatable.custom.js')?>"></script>


<script src="<?= asset('public/admin-panel/assets/js/script.js')?>" ></script>


<!-- Select2 js -->
<script type="text/javascript" src="<?= asset('public/admin-panel/assets/js/select2/select2.full.min.js')?>"></script>
<script type="text/javascript" src="<?= asset('public/admin-panel/assets/js/select2/select2-custom.js')?>"></script>

<!--Datepicker js-->
<script src="<?= asset('public/admin-panel/assets/js/date-picker/datepicker.js')?>"></script>
<script src="<?= asset('public/admin-panel/assets/js/date-picker/datepicker.en.js')?>"></script>
<script src="<?= asset('public/admin-panel/assets/ckeditor/ckeditor.js')?>"></script>
<script src="<?= asset('public/jalalidatepicker/persian-date.min.js')?>"></script>
<script src="<?= asset('public/jalalidatepicker/persian-datepicker.min.js')?>"></script>
<script>
    $(document).ready(function(){
        // CKEDITOR.replace('summary')
        CKEDITOR.replace('body')

        $('#persian_date_view').persianDatepicker({
            altField : '#persian_date',
            format: 'YYYY/MM/DD HH:mm:ss',
            // timePicker: {
            //     enabled: true,
            //     meridiem: {
            //         enabled: true
            //     }
            // }
        });
        
    })
</script>

</body>
</html>