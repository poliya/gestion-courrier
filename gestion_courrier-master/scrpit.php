<script>
function myFunction(){
    var x = document.getElementById("arrive").value;
    var date = x.split("-");
    var year=parseInt(date[0]);
    var month=parseInt(date[1]);
    var day=parseInt(date[2]);
    //var currentDate=new Date(year,month,day);
    var currentDate=new Date(x);
    var temp=new Date(currentDate).add(2).month();
    var dateToDisplay=temp.getDay()+"/"+temp.getMonth()+"/"+temp.getYear();
    document.getElementById("duu").value =temp;
}
</script>