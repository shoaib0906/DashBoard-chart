$report_chart = DB::select("select Month(created_at)as Period,sum(user_id) as Sales FROM `activity_log`  
                WHERE ( YEAR ( `activity_log`.`created_at` ) = YEAR ( now( ) )) GROUP by Month(created_at) ");
        for($i=1;$i<=12;$i++)
            {
                $iii = str_pad($i, 2, "0", STR_PAD_LEFT);
                $day = str_pad($iii, 6, date('Y'), STR_PAD_LEFT);
                foreach ($report_chart as $tic) {  
                    $absent = 0 ;                              
                        if($tic->Period == $i)
                        {
                            $absent = $tic->Sales;
                            break;
                        }
                }
                
                //$graph_data[] = " [$day : $absent]"; 
                $graph_data[] = "{ y:'$day',a:$absent}";
            }
        //$graph_data = Self::made_chart($report_chart);
        $data['graph_data'] = implode(',',$graph_data);
        
        
