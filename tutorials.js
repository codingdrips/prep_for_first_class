$( document ).ready ( function (  ) {
        console.log( "Queryyyy" )
        $.ajax ({

                url: "index.php",
                type: "post",
                data: { "delete": "Victory" },
                success: ( res ) => {
                   
                    // res = JSON.parse ( res )
                    // $( "h1" ).html ( res[ 1 ][ "my school" ] )
                    console.log ( res )

                }, 
                error: ( error ) => {
                    if ( error ) throw error
                }

        })

} )