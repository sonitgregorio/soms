</div>
  <script src="/assets/js/jquery.js"></script>
  <script src="/assets/js/bootstrap.js"></script>
  <script src="/assets/js/select2.full.min.js"></script>
  <script src="/assets/js/jquery.dataTables.min.js"></script>


      <script>
  
      $(document).ready(function (){

        $('#example').DataTable();

        $('.inform').click(function(e){
            pid = $(this).data('param');
            $.post("/users/get_registration", {pid}, function(data){
              // alert(data);
              $('input[name=pids]').val(pid);
              $('.reg_inform').html(data);
            });
            
        });

        $('.addpo').click(function(e){
          mid = $(this).data('param');
          $('input[name=mid]').val(mid);
          $('#add_po').modal('show');
        });

          $('.disapprove').click(function(e){
             mid = $(this).data('param');
              $('input[name=mid_d]').val(mid);
             $('#disapprove').modal('show');
          });

        $("#menu-toggle").click(function(e) {
              e.preventDefault();
              $("#wrapper").toggleClass("toggled");
          });
        
       

        $('.chekc').click(function(e){
          x = $(this).data('param1');
          $('input[name=fiddss]').val(x);
          $('#cced').modal('show');
          e.preventDefault();
        });

        $('.addmaterial').click(function(e){
          x = $(this).data('param');
          $('input[name=mid]').val(x);
          y = 1;

          $.post("materials/get_item", {x, y}, function(data){
              $(".list_mat"). html(data);  
          });
          $('#add_materials').modal('show');
        });


        $('.addrfq').click(function(e){
          x = $(this).data('param');
          $('input[name=mid]').val(x);
          $('#add_rfq').modal('show');
        })

        $('.del_materials').click(function(e){
          x = $(this).data('param');
          m = confirm('Are You Sure?');
          if (m == true) {
              $.post('/materials/del_materials', {x}, function(data){
                $(".list_mat").html(data);
                $('.errors').html('<div class="alert alert-success">Successfuly Deleted</div>');
            });

          };
        });

        $('.cancels').click(function(){
          $('input[name=description]').val('');
          $('input[name=quantity]').val('');
        });




        $("#submit_material").submit(function(){
          $.post("/materials/submit_material", $(this).serialize(), function(data){
            if (data == 1) {
               // $('.errors').html('<div class="alert alert-danger">Item Already Exist</div>');
            }else{
              $(".list_mat").html(data);
              $('input[name=description]').val('');
              $('input[name=quantity]').val('');
              $('.errors').html('<div class="alert alert-success">Successfuly Added</div>');
            };
          
          });
        });


        $('.item_select').change(function(e){
            x = $('.item_select').val();
            $.post('/rfq/get_quantity', {x}, function(data){
              $('input[name=qty]').val(data);
            });

        }); 

        $('.unitp').change(function(e){
          x = $('input[name=qty]').val();
          y = $('.unitp').val();

          z = x * y;
          $('input[name=total]').val(z);
        });

        $('.invoice').click(function(){
          x = $(this).data('param');
          $('input[name=mid]').val(x);
          $('#inv_mat').modal('show');
        });

        $("#sub").prop('disabled', true);

        $('.checkIt').bind('click', function() {
           var tid = $(this).data('param6');
          if($(this).is(":checked")) {

                var st = 1;
                   $.post('/iar/add_stat',{st: st, tid: tid}, function (sub) {
                    sub_notes(tid);
                   });
                
            }else{
               $("#sub").prop('disabled', true);
               var st = 0;
                $.post('/iar/add_stat',{st: st, tid: tid}, function (sub) {});
            } 
        });

        $('#toDate').change(function () {
            var todate = $('#toDate').val();
            var fromdate = $('#fromDate').val();
            $.post('/materials/filter_physical', {fromdate: fromdate, todate: todate},function(data){
                console.log(data);
                $("#repl").html(data)
            })

        });

          $('#ptoDate').change(function () {
            var todate = $('#ptoDate').val();
            var fromdate = $('#pfromDate').val();
            $.post('/materials/filter_ppe', {fromdate: fromdate, todate: todate},function(data){
                console.log(data);
                $("#pbody").html(data)
            })

        });
          $('#stoDate').change(function () {
            var todate = $('#stoDate').val();
            var fromdate = $('#sfromDate').val();
            $.post('/materials/filter_supply', {fromdate: fromdate, todate: todate},function(data){
                console.log(data);
                $("#sbody").html(data)
            })

        });











        function sub_notes(tid){
            $('#notes').submit(function (e){
            var conote = $('#conote').val(); 
            // var tid = $(this).data('param6');
            $.post('/iar/add_notess',{tid:tid, conote:conote}, function (notes) {
                          // alert($(this).data('param6'));
                          $('#conote').val('');
                             window.location.reload();
                          //$('.com').html('<div class="alert alert-success">Successfuly Added</div>');
            });
          e.preventDefault();
         
           });
        }
        


      });
      </script>

  </body>
</html>
