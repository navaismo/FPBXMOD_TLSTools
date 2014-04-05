$(document).ready(function(){
//add sip peer tls submit
        $("#psubtls").click(function() {
                //$('#loadingp').html("<div align=center><br><br><img  src='modules/tlstools/cert-loader.gif'/></div>");
                $.ajax({
                        type: "GET",
                        url: "modules/tlstools/gentls.php",
                        data:{type: 'peer', dns: $("#peerdns").val(), name: $("#peerco").val(), client: $("#peername").val(), pwd: $("#peerpwd").val()},
                        success: function(data){
                                if ( data == 0 ){
                                        $('#loadingp').html("");
                                        alert(" All Data is Required !!!!");
                                }else{
                                      	//window.top.location="main.php#sippeer";
                                        window.top.location.reload();
                                }
                        }

                });
        });


//add asterisk tls submit
        $("#asubtls").click(function() {
                //$('#loading').html("<div align=center><br><br><img  src='modules/tlstools/cert-loader.gif'/></div>");
                $.ajax({
                        type: "GET",
                        url: "modules/tlstools/gentls.php",
                        data:{type: 'server', dns: $("#astdns").val(), name: $("#astco").val(),  pwd: $("#astpwd").val()},
                        success: function(data){
                                if ( data == 0 ){
                                        $('#loading').html("");
                                        alert(" All Data is Required !!!!");
                                }else{
                                      	//window.top.location="main.php#sippeer";
                                        window.top.location.reload();
                                }
                        }

                });
        });


//cert manager
        var elf2 = $('.cert-manager').elfinder({
                url : 'modules/tlstools/misc/elfinder-connector/connector2.php'  // connector URL (REQUIRED)
        }).elfinder('instance');


});
