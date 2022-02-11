<tr>
    <td class="table-desc"><?= $footer['title'] ?></td>
    <td class="table-content changes-are-live">
        <?php
            $list = [];
            $members = $footer['team'];
            $additionals = $footer['additionals'];
        
            if ($members) {
                foreach ($members as $member) { 
                    $credentials = [];
                    $terms = get_the_terms($member->ID,  'bio_credentials');
                    if( $terms ) {
                        foreach( $terms as $term ) {
                            $credentials[] = $term->name;
                        }
                    }
                    
                    if($additionals) {
                        $add = [];
                        foreach ($additionals as $additional) {
                            $add[] = $additional['addition_tm'];
                        }
                    }
                    
										//$list[] = get_the_title( $member ->ID ); 

                    $list[] = "<a href='javascript:void(0)' onClick='goToPracticePage(". $member->ID . ")' class='team-links'>" . get_the_title( $member ->ID ) ."</a>"; 
                    
//                    if (empty($credentials)){
//                        $list[] = "<a href='javascript:void(0)' onClick='goToPracticePage(". $member->ID . ")' class='team-links'>" . get_the_title( $member ->ID ) ."</a>"; 
//                    } else {
//                            $list[] = "<a href='javascript:void(0)' onClick='goToPracticePage(". $member->ID . ")' class='team-links'>" . get_the_title( $member ->ID ) . ", " . implode(", ", $credentials) . "</a>";
//                        }
                }
            }
        
            if (!empty($add)){
                print implode(", ", $list) . ", " . implode(", ", $add);
            } else {
                    print implode(", ", $list);
                }
        ?>  
    </td>
</tr>
