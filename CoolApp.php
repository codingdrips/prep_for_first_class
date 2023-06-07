<?php

trait MyTrait 
{

    // final public const mName = "Name";
    function display (  ) 
    {
        echo "Hello from trait " . parent::name;
    }  

}

trait MySecTrait 
{
    function display (  ) 
    {
        echo "Hello TTTrom triat " .parent::name;
    }  
}
trait MyThirdTrait 
{
     // use MyTrait, MySecTrait;
     use MyTrait, MySecTrait {

        MySecTrait::display insteadOf MyTrait; 
        MySecTrait::display as private myPub;

    }
}

class PClass 
{
    const name = "Victory Guy";
}

class CoolApp extends PClass {
    use MyThirdTrait;
    protected mysqli $conn;
    protected string $sql;
    protected ?string $address = null; 
    function __construct ( mysqli $conn )
    {
        $this->conn = $conn; 
        // $this->display();
    }

    public function deleteData ( mysqli $conn )
    {
        if ( isset( $_POST[ "delete" ] ) )
        {
            $this->sql = "DELETE FROM details 
                    WHERE id=3 ";
            $this->run ();
            die ( "Deleted!" );
            
        }
    }

    public function updateData ( mysqli $conn )
    {
        if ( isset( $_POST[ "update" ] ) )
        {
            $this->sql = "UPDATE details SET school='Band School',
                                        grade='Annnnwesome!!' 
                                    WHERE id=1";
            $this->run();
            die ( "Updated!!" );
        }
    }

    public function readData ( mysqli $conn ) 
    {
        if ( isset( $_POST[ "read" ] ) ):

            // curdate() 
                $sql = "SELECT * FROM details WHERE true";

                $run = mysqli_query( $conn, $sql );

                $run or die ( "Insertion error: " . mysqli_error( $conn ) );

                if ( mysqli_num_rows( $run )>0 ) 
                {
                    $arr = array();
                    while ( $fetch=mysqli_fetch_assoc( $run ) )
                    {
                        $arr [ $fetch[ "id" ] ]
                                [ $fetch[ "school" ] ] = $fetch[ "grade" ];   
                    }

                            die ( json_encode( $arr ) );
                }

                die ( "Error " . mysqli_error( $conn ) );

        endif;
    }
    public function insertData ( mysqli $conn ) 
    {
        if ( isset( $_POST[ "insert" ] ) ):

            // curdate() 
                $sql = "INSERT INTO details (
                        school, grade, created_at
                ) VALUES ( 'my school', 'my grade', 
                  curdate() )";

                $run = mysqli_query( $conn, $sql );

                $run or die ( "Insertion error: " . mysqli_error( $conn ) );

                die ( "Inserted" );

        endif;
    }
    public function createTable ( mysqli $conn ) 
    {
        
            if ( isset( $_POST[ "name" ] ) )
            {
                $sql = "CREATE TABLE IF NOT EXISTS details (
                            id int auto_increment primary key,
                            school text not null, 
                            grade text,
                            created_at date
                )";

                $run = mysqli_query( $conn, $sql );

                $run or die ( "Error: " . mysqli_error( $conn ) );
                
                die ( "Created" );

            }

     
    }

    public function serveTemplate (  ) 
    {
        require "template.php";
    }

    public function run ( ): mysqli_result|bool
    {
        return mysqli_query( $this->conn, $this->sql )
        or die ( "Error: " . mysqli_error( $this->conn ) );
    }
    
   
}