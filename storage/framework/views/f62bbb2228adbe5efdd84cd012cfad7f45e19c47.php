<?php $__env->startSection('title','Chart'); ?>
<?php $__env->startSection('content'); ?>
		<fieldset>
					<div class="form-group">
						<label class="col-sm-2 control-label">Date</label>
						<div class="col-sm-6">
                            <select name="month" class="form-control" id="select_month" >
                                <option value="0">--Chon thang--</option>
                                <?php for($i = 1; $i <=12 ; $i++): ?>
                                    <option value="<?php echo e($i); ?>"
                                        <?php if($i == date('m')): ?>
                                            selected="" 
                                        <?php endif; ?>
                                    ><?php echo e($i); ?></option>
                                <?php endfor; ?>
                            </select>
                            <select name="year" class="form-control" id="select_year">
                                <option value="0">--Chon nam--</option>
                                <?php for($i = 2100; $i >=1900 ; $i--): ?>
                                    <option value="<?php echo e($i); ?>"
                                        <?php if($i == date('Y')): ?>
                                            selected="" 
                                        <?php endif; ?>
                                    ><?php echo e($i); ?></option>
                                <?php endfor; ?>   
                            </select>
						</div>
                    </div>
						
					</div>
				</fieldset>

<div class="col-md-12">
    <div class="card">
        <div class="header">
            Views
            <p class="category">Bar Chart</p>
    </div>
<div class="content">
   <canvas id="myChart" width="300" height="100"></canvas>
</div>
</div>
</div>
                           

<?php $__env->stopSection(); ?>
<?php $__env->startPush('ajax'); ?>
<script>

    $('document').ready(function(){
        let myChart;
        var chartOption = {
                    scales: {
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                stepSize: 1.0,
                            },
                        }]
                    },
                    responsive              : true,
                    maintainAspectRatio     : true,
                    datasetFill             : true
                };
        $.ajax({
            url:'<?php echo e(route('get_stat_doctors_monthly')); ?>',
            type:'GET',
            dataType:'json',
            data:{
                record_month: $("#select_month").val(),
                record_year: $("#select_year").val()
            }
        })
        .done(function(respone){
            
            var chartData = {
                    labels: respone.array_name_doctor,
                    datasets: [{
                        label: 'Total appointment',
                        data: respone.array_count,
                        backgroundColor:
                            'rgba(255, 99, 132, 0.2)',
                        borderColor:
                            'rgba(255, 99, 132, 1)',
                        borderWidth: 1
                    }]
                };
            var ctx = document.getElementById('myChart').getContext('2d');
            myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: chartData,
                options: chartOption
            });

        });


        $("#select_month,#select_year").change(function() {
            var select_month = $("#select_month").val();
            var select_year = $("#select_year").val();
            $.ajax({
                url:'<?php echo e(route('get_stat_doctors_monthly')); ?>',
                type:'GET',
                dataType:'json',
                data:{
                    record_month: $("#select_month").val(),
                    record_year: $("#select_year").val()
                }
            })
            .done(function(respone){    
                var chartData = {
                        labels: respone.array_name_doctor,
                        datasets: [{
                            label: 'Total appointment',
                            data: respone.array_count,
                            backgroundColor: 
                                'rgba(255, 99, 132, 0.2)',
                            borderColor: 
                                'rgba(255, 99, 132, 1)',   
                            borderWidth: 1
                        }]
                    };
                myChart.data = chartData;
                myChart.update();
            });
            // alert(select_month);
        });

       


    });




</script>


<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>