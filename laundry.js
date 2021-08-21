$('#new_laundry').click(function(){
    uni_modal('New Laundry','manage_laundry.php','mid-large')
})
$('.edit_laundry').click(function(){
    uni_modal('Edit Laundry','manage_laundry.php?id='+$(this).attr('data-id'),'mid-large')
})
$('.delete_laundry').click(function(){
    _conf("Are you sre to remove this data from list?","delete_laundry",[$(this).attr('data-id')])
})
$('#laundry-list').dataTable()
function delete_laundry($id){
    start_load()
    $.ajax({
        url:'ajax.php?action=delete_laundry',
        method:'POST',
        data:{id:$id},
        success:function(resp){
            if(resp==1){
                alert_toast("Data successfully deleted",'success')
                setTimeout(function(){
                    location.reload()
                },1500)

            }
        }
    })
}