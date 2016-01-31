

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
              $(".list_mat").html(data);
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
      });
      </script>

  </body>
</html>
