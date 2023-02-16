<?php
   $d=date("D"); switch
   ($d)

   {
          case"man":
            echo "today is monday";
            break;

         case"tue":
            echo "Today is Tuseday";
            break;

        case"Wed":
            echo "Today is Wednesday";
            break;

        case"Thu":
            echo "Today is Thursday";
            break;
        
        case"Fri":
            echo "Today is Friday";
            break;

        case"Sat":
            echo "Today is Saturday";
            break;  
            
        case"Sun":
            echo "Today is Sunday";
            break;

          default:
            echo false;
            break;   

    }

?>