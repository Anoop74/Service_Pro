 <?php
class dbprocess
{
//------------for update and delete -------------------//
     function  get_district($distid)
     {
        $loadresult="select * from tbl_district where dist_id=$distid";
		return $this->process($loadresult);
     }
	  function  delete_district($dist_id)
     {
        $loadresult="delete from tbl_district where dist_id=$dist_id";
		return $this->process($loadresult);
     } 
	 function  update_district($distid,$dist_name)
     {
		$q="update tbl_district set dist_name='$dist_name' where dist_id=$distid";
        
		return $this->process($q);
     }
	 
	 function load_planttype()
	{
		$q="select * from tbl_planttype";
		$result=$this->process($q);
		return $result;
	}
	 function load_fertilizer_name()
	{
		$q="select * from  tbl_fertilizer";
		$result=$this->process($q);
		return $result;
	}
	
	 function get_plant_to_edit($eid)
	{
		$q="select * from   tbl_additem where item_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	 function delete_plant($did)
	{
		$q="delete  from   tbl_additem where item_id=$did";
		$result=$this->process($q);
		return $result;
	}
	
	 function get_fertilizer($eid)
	{
		$q="select * from  tbl_fertilizer where fr_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	function get_fertilizer_to_edit($eid)
	{
		$q="select * from  tbl_comp_fertilizer where fr_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	
	
	  function  update_fertilizer($fertilizer_name,$fr_id)
     {
		$q="update tbl_fertilizer set fr_name='$fertilizer_name' where fr_id=$fr_id";
        return $this->process($q);
     }
	
	 function delete_fertilizer($eid)
	{
		$q="delete from tbl_fertilizer where fr_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	function update_planttype($typename,$description,$eid)	
	{
		$q="update tbl_planttype set typename='$typename',description='$description' where typeid=$eid";
		$result=$this->process($q);
		return $result;
	}
	function delete_plant_type($eid)
	{
		$q="delete from tbl_planttype where typeid=$eid";
		$result=$this->process($q);
		return $result;
	}
	
	
	 function load_plant_category()
	{
		$q="select * from tbl_type";
		$result=$this->process($q);
		return $result;
	}
	 function get_plant_category($eid)
	{
		$q="select * from tbl_type where type_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	function update_plant_category($typename,$description,$eid)	
	{
		$q="update tbl_type set type='$typename',description='$description' where type_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	function delete_plant_category($eid)
	{
		$q="delete from tbl_type where type_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	
	
   function load_plant_subcategory()
	{
		$q="select sb.*,tp.* from tbl_subcategory sb,tbl_type tp where tp.type_id=sb.type_id";
		$result=$this->process($q);
		return $result;
	}
	
	function get_plant_subcategory($eid)
	{
		$q="select * from  tbl_subcategory where type_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	function update_plant_subcategory($sub,$type_id,$eid)	
	{
		$q="update  tbl_subcategory set subcategory='$sub',type_id=$type_id where subcat_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	function delete_plant_subcategory($eid)
	{
		$q="delete from  tbl_subcategory where subcat_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	
	//-----------------------------------------------//
	
	function process($q)
	{
		include_once'dbconnection.php';
		$obj=new dbcon();
		return $obj->query($q);
	}
	function add_login($username,$password,$usertype,$status)
	{
		$q="insert into tbl_login(user_name,password,user_type,status) values('$username','$password',$usertype,$status)";
		$result=$this->process($q);
		return $result;
	}
	function addfert($fert_name)
	{
		$q="insert into tbl_fertilizer(fr_name) values('$fert_name')";
		$result=$this->process($q);
		return $result;
	}
	function custisn($name,$address,$gender,$contact,$email,$reg_date,$uname,$pwrd,$status)
	{
		$q="insert into tbl_customer(cust_name,cust_address,cust_gender,cust_contact,cust_email,reg_date,user_name,passwd,status) values('$name','$address','$gender','$contact','$email','$reg_date','$uname','$pwrd',$status)";
		$result=$this->process($q);
		return $result;
	}
	function approve_farm($fm_id,$status)
	{
		$q="update tbl_farm set status=$status where f_id=$fm_id";
		$result=$this->process($q);
		return $result;
	}
	function approve_company($cmp_id,$status)
	{
		$q="update tbl_company set status=$status where cmid=$cmp_id";
		$result=$this->process($q);
		return $result;
	}
	function approve_customer($cust_id,$status)
	{
		$q="update tbl_customer set status=$status where cust_id=$cust_id";
		$result=$this->process($q);
		return $result;
	}
	
	function farmreg($fname,$faddress,$district,$location,$fcont,$femail,$licence,$type,$uname,$pwrd,$reg_date)
	{
		$q="insert into tbl_farm(f_name,f_address,f_district,f_location,f_contact,f_email,f_licence,f_type,f_username,f_password,f_reg_date) values('$fname','$faddress','$district','$location','$fcont','$femail','$licence','$type','$uname','$pwrd','$reg_date')";
		$result=$this->process($q);
		return $result;
	}
	  function  is_uname_exist($uname)
      { 
		$this->query="select *  from tbl_login where user_name='$uname'";
		$result=$this->process($this->query);
		$exist=mysqli_num_rows($result);
		return $exist;
		
      }
	function addcompanyregi($cname,$address,$city,$procestype,$mauf_items,$dealer_of,$district,$pno,$lno,$uname,$logo)
	{
		$q="insert into tbl_company(coname,coadd,city,processtype,dealer_of,manuf_of,codistrict,pno,lno,username,logo,status)values('$cname','$address','$city','$procestype','$mauf_items','$dealer_of','$district','$pno','$lno','$uname','$logo',0)";
		return $this->process($q);
	}
	function additem($code,$type,$breed,$remark,$Splbreed,$suiclimate,$fertil,$age,$price,$uploadfile,$subcat,$f_id)
	{
	$q="insert into
tbl_additem(item_code,item_type,item_bdname,item_remark,item_spbd,suit_clmt,suit_fert,item_age,item_price,item_image,subcat_id,f_id) values($code,$type,'$breed','$remark','$Splbreed','$suiclimate','$fertil','$age',$price,'$uploadfile',$subcat,$f_id)";
		$result=$this->process($q);
		return $result;
	}
	
	function update_item($code,$type,$breed,$remark,$Splbreed,$suiclimate,$fertil,$age,$price,$uploadfile,$subcat,$f_id,$eid)
	{
	$q="update
tbl_additem set item_code=$code,item_type=$type,item_bdname='$breed',item_remark='$remark',item_spbd='$Splbreed',suit_clmt='$suiclimate',suit_fert='$fertil',item_age='$age',item_price=$price,item_image='$uploadfile',subcat_id=$subcat,f_id=$f_id where item_id=$eid";
		$result=$this->process($q);
		return $result;
	}
	
	
	function addplanttype($plantype,$desc)
	{
		$q="insert into tbl_planttype(typename,description)values('$plantype','$desc')";
		$result=$this->process($q);
		return $result;
	}
	
	function adddistrict($distname)
	{
		$q="insert into tbl_district(dist_name)values('$distname')";
		$result=$this->process($q);
		return $result;
	}
	function order($item_id,$name,$address,$pin,$contact,$email,$delivery,$qty,$remarks,$price,$order_date,$farm_id,$cust_id,$deldate)
	{
		$q="insert into tbl_order(item_id,ord_name,ord_address,pin,ord_contact,email,delivery,qty,remarks,tot_price,ord_date,f_id,bk_status,cust_id,del_date,status) values($item_id,'$name','$address',$pin,'$contact','$email','$delivery',$qty,'$remarks',$price,'$order_date',$farm_id,1,$cust_id,'$deldate',1)";
		$result=$this->process($q);
		return $result;
	}
	
	
	function fertilizer_booking_master($comp_id,$name,$address,$pin,$contact,$email,$delivery,$order_date,$cust_id,$deldate)
	{
		
		$q="insert into tbl_fr_booking_master(comp_id,ord_name,ord_address,pin,ord_contact,email,delivery,ord_date,bk_status,cust_id,del_date,status) values($comp_id,'$name','$address',$pin,'$contact','$email','$delivery','$order_date',1,$cust_id,'$deldate',1)";
		$result=$this->process($q);
		return $result;
	}
	function update_fr_booking($ord_id,$status)
	{
		$q="update  tbl_fr_booking_master set status=$status where ord_id=$ord_id";
		$result=$this->process($q);
		return $result;
	}
	function update_fr_stock1($item_id,$qty)
	{
		$q="update  tbl_fr_stock set stk_qty=(stk_qty-$qty) where fr_id=$item_id";
		$result=$this->process($q);
		return $result;
	}
	function update_plant_stock1($item_id,$qty)
	{
		$q="update  tbl_stock set new_itemqty=(new_itemqty-$qty) where item_id=$item_id";
		$result=$this->process($q);
		return $result;
	}
	
	
	function fertilizer_booking_items($ord_id,$item_id,$qty)
	{
		$q="insert into  tbl_fr_bookings_items(ord_id,item_id,qty,status)values($ord_id,$item_id,$qty,1)";
		$result=$this->process($q);
		return $result;
	}
	function update_fr_bookingitems($item_id)
	{
		$q="update  tbl_fr_bookings_items set status=2 where id=item_id ";
		$result=$this->process($q);
		return $result;
	}
	
	
	function subcat($Cate,$Subcat)
	{
		$q="insert into tbl_subcategory(subcategory,type_id)values('$Subcat',$Cate)";
		$result=$this->process($q);
		return $result;
	}
	function addcat($cat,$des)
	{
		$q="insert into tbl_type(type,description)values('$cat','$des')";
		$result=$this->process($q);
		return $result;
	}
	
	//UPDATIONs   
	function update_stock($itemid,$stock)
	{
		$sel="select * from  tbl_stock where item_id=$itemid";
		$res=$this->process($sel);
		if(mysqli_num_rows($res)<1)
		{
			$q="insert into tbl_stock(item_id,new_itemqty) values($itemid,$stock)";
		}
		else
		{
			$q="update tbl_stock set new_itemqty=new_itemqty+$stock where item_id=$itemid";
		}
		$result=$this->process($q);
		return result;
	}
	function update_fr_stock($itemid,$stock)
	{
		$sel="select * from  tbl_fr_stock where fr_id=$itemid";
		$res=$this->process($sel);
		if(mysqli_num_rows($res)<1)
		{
			$q="insert into tbl_fr_stock(fr_id,stk_qty) values($itemid,$stock)";
		}
		else
		{
			$q="update tbl_fr_stock set stk_qty=stk_qty+$stock where fr_id=$itemid";
		}
		$result=$this->process($q);
		return result;
	}

	function load_plant_stock($plid)
	{
		$this->query="select * from tbl_stock where item_id=".$plid;
		return $this->process($this->query);
	}
	
	
	function load_city($distid)
	{
		$this->query="select distinct(f_location) from tbl_farm where f_district=".$distid;
		return $this->process($this->query);
	}
	function load_fr_bookings($comp_id,$status)
	{
		$this->query="select *  from  tbl_fr_booking_master where comp_id=$comp_id and status=$status order by ord_id";
		return $this->process($this->query);
	}
	function get_fr_booking_info($ord_id)
	{
		$this->query="select *  from  tbl_fr_booking_master where ord_id=$ord_id";
		return $this->process($this->query);
	}
	
	function get_fr_booking_deatils($ord_id)
	{
		$this->query="select *  from  tbl_fr_bookings_items  where ord_id=$ord_id";
		return $this->process($this->query);
	}
	
	
	function get_fr_ord_no()
	{
		$this->query="select ord_id from tbl_fr_booking_master order by ord_id desc limit 1";
		$res=$this->process($this->query);
		if(mysqli_num_rows($res)<1)
		{
			$rod_id=1;
		}
		else
		{
			$row=mysqli_fetch_assoc($res);
			$rod_id=$row['ord_id']+1;
		}
		return $rod_id;
	}
	function generate_fr_code()
	{
		$this->query="select fr_code from  tbl_comp_fertilizer order by fr_code desc limit 1";
		$res=$this->process($this->query);
		if(!empty($res))
		{
			$row=mysqli_fetch_assoc($res);
			$fr_code=$row['fr_code'];
		}
		else
		{
			$fr_code=1000;
		}
		return $fr_code;
	}
	function addfert_comp($fername,$fr_code,$det,$comp_id,$price,$unit,$ditype,$disrate)
	{
		$this->query="insert into tbl_comp_fertilizer(fr_name,fr_code,fr_details,fr_company,fr_prize,unit,dis_type,dis_rate,status)values('$fername',$fr_code,'$det',$comp_id,$price,'$unit','$ditype',$disrate,1)";
		return $this->process($this->query);
	}
	function update_fert_comp($fername,$det,$comp_id,$price,$unit,$ditype,$disrate,$eid)
	{
		$this->query="update tbl_comp_fertilizer set fr_name='$fername',fr_details='$det',fr_company=$comp_id,fr_prize=$price,unit='$unit',dis_type='$ditype',dis_rate=$disrate where fr_id=$eid";
		return $this->process($this->query);
	}
	function delete_fert_comp($did)
	{
		$this->query="delete from  tbl_comp_fertilizer  where fr_id=$did";
		return $this->process($this->query);
	}
	
	function  load_category()
     {
        $q="select * from tbl_type";
		$r=$this->process($q);
		return $r;
     }
	function load_subcategory($cat_id)
	{
		$q="select * from tbl_subcategory where type_id=$cat_id";
		$r=$this->process($q);
		return $r;
	}
	function load_custdetails()
	{
		$q="select cust_name from tbl_customer";
		$r=$this->process($q);
		return $r;
	}
	function load_district()
	{
		$q="select * from tbl_district";
		$r=$this->process($q);
		return $r;
	}
	function load_items()
	{
		$q="select * from tbl_additem";
		$r=$this->process($q);
		return $r;
	}
	function load_all_itemsof_farm($farm_id)
	{
		$q="select itm.*,tp.type as type_name,sub.subcategory as sub_name  from tbl_additem itm,tbl_type tp,tbl_subcategory sub where itm.subcat_id=sub.subcat_id and itm.item_type=tp.type_id and itm.f_id=$farm_id";
		$r=$this->process($q);
		return $r;
	}
	function load_stockof_farm($farm_id)
	{
		$q="select itm.*,tp.type as type_name,sub.subcategory as sub_name,st.new_itemqty from tbl_additem itm,tbl_type tp,tbl_subcategory sub, tbl_stock st where itm.subcat_id=sub.subcat_id and itm.item_type=tp.type_id and itm.f_id=$farm_id and itm.item_id=st.item_id";
		$r=$this->process($q);
		return $r;
	}

	
	function get_stock($plid)
	{	$stock=0;
		$q="select new_itemqty from tbl_stock where item_id=$plid";
		$r=$this->process($q);
		if(!empty($r))
		{
		$row=mysqli_fetch_assoc($r);
		$stock=$row['new_itemqty'];
		}
		return (int)$stock;
	}
	function get_fr_stock($fr_id)
	{	$stock=0;
		$q="select stk_qty from  tbl_fr_stock where fr_id=$fr_id";
		$r=$this->process($q);
		if(!empty($r))
		{
		$row=mysqli_fetch_assoc($r);
		$stock=$row['stk_qty'];
		}
		return (int)$stock;
	}
	function load_items2()
	{
		$q="select itm.*,tp.type as type_name,sub.subcategory as sub_name  from tbl_additem itm,tbl_type tp,tbl_subcategory sub where itm.subcat_id=sub.subcat_id and itm.item_type=tp.type_id";
		$r=$this->process($q);
		return $r;
	}
	function load_ordered($bk_id)
	{
		$q="select ord.*,itm.item_bdname,itm.item_code from tbl_order ord,tbl_additem itm where ord.item_id=itm.item_id and ord_id=$bk_id";
	    $r=$this->process($q);
		return $r;
	}
	
	function get_item_det($id)
	{
		$q="select itm.*,sub.*,tp.*,st.new_itemqty from tbl_additem itm,tbl_subcategory sub,tbl_type tp,tbl_stock st where itm.subcat_id=sub.subcat_id and sub.type_id=tp.type_id and itm.item_id=$id and st.item_id=$id and itm.item_id=st.item_id";
		$r=$this->process($q);
		return $r;
	}
	function get_item_det2($id)
	{
		$q="select itm.*,sub.*,tp.* from tbl_additem itm,tbl_subcategory sub,tbl_type tp where itm.subcat_id=sub.subcat_id and sub.type_id=tp.type_id and itm.item_id=$id";
		$r=$this->process($q);
		return $r;
	}
	
	function get_cust_list()
	 {
		//$b="select p.*,d.dist_name from tbl_person p,tbl_district d where p.dist_id=d.dist_id";
		$q="select * from tbl_customer";
		$result=$this->process($q);
		return $result;
	 }
	 function get_farm_list()
	 {
		 $q="select * from tbl_farm  ";
		$result=$this->process($q);
		return $result;
	 }
	  function get_comp_list()
	 {
		 $q="select * from  tbl_company  ";
		$result=$this->process($q);
		return $result;
	 }
	 function get_farm_details($fm_id)
	 {
		 $q="select f.*,dis.dist_name from  tbl_farm f,tbl_district dis  where f_id=$fm_id and f_district=dist_id";
		 $result=$this->process($q);
		 return $result;
	 }
	 function get_book_list($fid)
	 {
		 $q="select * from  tbl_order where f_id=$fid";
		 $result=$this->process($q);
		 return $result;
	 }
	
	 function AddCust($fname,$lname,$dob,$gender,$address,$contact,$uploadfile,$email,$reg_date)
	 {
		 $q="inset into tbl_item() values($fname,$lname,$dob,$gender,$address,$contact,$uploadfile,$email,$reg_date)";
		$result=$this->process($q);
		return $result;
	 }
	 function load_itemsfor_view()
	{
		$q="select itm.*,sub.*,cat.type from tbl_additem itm,tbl_subcategory sub,tbl_type cat where itm. 	subcat_id=sub.subcat_id and cat.type_id=sub.type_id";
		$r=$this->process($q);
		return $r;
	}
	function load_item_det_view($plid)
	{
		$q="select itm.*,sub.*,cat.type,fm.*,d.dist_name from tbl_additem itm,tbl_subcategory sub,tbl_type cat,tbl_farm fm,tbl_district d where itm. 	subcat_id=sub.subcat_id and fm.f_id=itm.f_id and cat.type_id=sub.type_id and itm.item_id=$plid and fm.f_district=d.dist_id";
		$r=$this->process($q);
		return $r;
	}
	
	function load_fertlizer_stores()
	{
		$q="select fr.*,d.dist_name from tbl_company fr,tbl_district d where fr.codistrict=d.dist_id";
		$result=$this->process($q);
		return $result;
	}
	
	function check_user($uname,$password)
	 {
		$q="select * from tbl_login where user_name='$uname' and password='$password'";
		$result=$this->process($q);
		return $result;
	 }
	 function get_customer($uname)
	 {
		$q="select * from tbl_customer where user_name='$uname'";
		$result=$this->process($q);
		return $result;
	 }
	 function get_company($uname)
	 {
		$q="select * from tbl_company where username='$uname'";
		$result=$this->process($q);
		return $result;
	 }
	 function get_company_byid($cmid)
	 {
		$q="select c.*,d.dist_name from tbl_company c,tbl_district d where cmid=$cmid and c.codistrict=d.dist_id";
		$result=$this->process($q);
		return $result;
	 }
    function get_farm($uname)
	 {
		$q="select * from  tbl_farm where f_username='$uname'";
		$result=$this->process($q);
		return $result;
	 }
	 
	function load_my_booking($cust_id)
	{
		$this->query="select ord.*,ord.status as ord_status,itm.item_bdname,item_code,item_spbd,frm.* from tbl_order ord, tbl_additem itm,tbl_farm frm where ord.	item_id=itm.item_id and itm.f_id=frm.f_id and ord.cust_id=$cust_id";
		return $this->process($this->query);
	}
	
	function load_my_fr_booking($cust_id,$status)
	{
		$this->query="select *  from  tbl_fr_booking_master where cust_id=$cust_id and status=$status order by ord_id";
		return $this->process($this->query);
	}
	 function load_farm()
	{
		$q="select f_name from  tbl_farm ";
		$r=$this->process($q);
		return $r;
	} 
	function addmessage($msgfrom,$cust_id,$sub,$msg,$msgdate,$sendertype,$status)
	{
		$q="insert into tbl_feedback(msg_from,msg_to,subject,msg,sender_type,msg_date,status) values($msgfrom,$cust_id,'$sub','$msg',$sendertype,'$msgdate',$status)";
		$r=$this->process($q);
		return $r;
	}
	function load_messages($user_id,$status,$user_type)
	{
		if($user_type==2)
		{
		$this->query="select fd.*,frm.f_name as sender_name,f_location as s_address from tbl_feedback fd,tbl_farm frm where msg_to=$user_id and fd.status=$status and fd.msg_from=frm.f_id";
		return $this->process($this->query);
		}
		if($user_type==4)
		{
		$this->query="select fd.*,cmp.coname as sender_name,coadd as s_address from tbl_feedback fd,tbl_company cmp where fd.msg_to=$user_id and fd.status=$status and fd.msg_from=cmp.cmid";
		return $this->process($this->query);
		}			
	}
	function delete_message($fid)
	{
		$this->query="delete from tbl_feedback where msg_id=$fid";
		//$this->query="select itm.*,cmp.cmid from tbl_item itm,tbl_compamy cmp where itm.cmid=cmp.cmid and itm.cmid";
		return $this->process($this->query);
	}
	function cancel_booking($bkid)
	{
		$this->query="update tbl_fr_booking_master set bk_status=2 where ord_id=$bkid";
		//$this->query="select itm.*,cmp.cmid from tbl_item itm,tbl_compamy cmp where itm.cmid=cmp.cmid and itm.cmid";
		return $this->process($this->query);
	}
	
	function cancel_booking2($bkid)
	{
		$this->query="update tbl_order set bk_status=2 where ord_id=$bkid";
		//$this->query="select itm.*,cmp.cmid from tbl_item itm,tbl_compamy cmp where itm.cmid=cmp.cmid and itm.cmid";
		return $this->process($this->query);
	}
	function cancel_fr_booking($c_ord_id)
	{
		$this->query="update  tbl_fr_booking_master set bk_status=2 where ord_id=$c_ord_id";
		//$this->query="select itm.*,cmp.cmid from tbl_item itm,tbl_compamy cmp where itm.cmid=cmp.cmid and itm.cmid";
		return $this->process($this->query);
	}
	
	function update_message($fid)
	{
		$this->query="update tbl_feedback set status=2 where msg_id=$fid";
		//$this->query="select itm.*,cmp.cmid from tbl_item itm,tbl_compamy cmp where itm.cmid=cmp.cmid and itm.cmid";
		return $this->process($this->query);
	}
	function adddelivery($ordid,$qty,$deldate)
	{
		$this->query="insert into tbl_delivery(ordid,qty1,deli_date)values($ordid,$qty,'$deldate')";
		//$this->query="select itm.*,cmp.cmid from tbl_item itm,tbl_compamy cmp where itm.cmid=cmp.cmid and itm.cmid";
		return $this->process($this->query);
	}
	
	function update_order($ordid,$status)
	{
		$this->query="update tbl_order set status=$status where ord_id=$ordid";
		//$this->query="select itm.*,cmp.cmid from tbl_item itm,tbl_compamy cmp where itm.cmid=cmp.cmid and itm.cmid";
		return $this->process($this->query);
	}
	function update_itemqty($itemid,$qty)
	{
		$qty=(int)$qty;
		$this->query="update tbl_stock set new_itemqty=new_itemqty - $qty where item_id=$itemid";
		
		return $this->process($this->query);
	}

	function update_view_status($book_id)
	{
		$this->query="update tbl_order set v_status=1 where ord_id=$book_id";
		//$this->query="select itm.*,cmp.cmid from tbl_item itm,tbl_compamy cmp where itm.cmid=cmp.cmid and itm.cmid";
		return $this->process($this->query);
	}
	
	function search_plant($ctid,$subid,$distid,$city)
	{
		
		$q="select itm.*,sub.*,cat.type,frm.f_district from tbl_additem itm,tbl_subcategory sub,tbl_type cat,tbl_farm frm where itm. 	subcat_id=sub.subcat_id and cat.type_id=sub.type_id and itm.f_id=frm.f_id";
		if($ctid >0)
		{
			$q=$q." and itm.item_type=$ctid";
		}
		if($subid >0)
		{
			$q=$q." and itm.subcat_id=$subid";
		}
		if($distid >0)
		{
			$qy=$q." and frm.f_district=$distid";
		}
		if($city !='0')
		{
			$q=$q." and frm.f_location='$city'";
		}
		return $this->process($q);
	}
	
	function search_fertilizer($fr_id,$distid,$city)
	{
		
		$q="select * from tbl_company  where cmid>0";
		
		
		if($distid >0)
		{
			$qy=$q." and codistrict=$distid";
		}
		if($city !='0')
		{
			$q=$q." and city='$city'";
		}
		if($fr_id >0)
		{
			$q="select distinct(c.cmid),c.*,fr.fr_id from tbl_company c,tbl_comp_fertilizer fr where fr.fr_company=c.cmid";
		}
		return $this->process($q);
	}
	
	
	function load_booking($frm_id)
	{
		$this->query="select ord.*,itm.item_bdname,item_code,frm.f_id from tbl_order ord, tbl_additem itm,tbl_farm frm where ord.	item_id=itm.item_id and itm.f_id=frm.f_id and ord.f_id=frm.f_id";
		return $this->process($this->query);
	}
	
	
	function get_booking_det2($book_id)
	{
		$this->query="select ord.*,itm.item_bdname,item_code,frm.f_id from tbl_order ord, tbl_additem itm,tbl_farm frm where ord.	item_id=itm.item_id and itm.f_id=frm.f_id and ord.f_id=frm.f_id and ord.ord_id=$book_id";
		return $this->process($this->query);
	}
	
	/* TO ADD
	
	function addfert($fert_name)
	{
		$q="insert into tbl_fertilizer(fr_name) values('$fert_name')";
		$result=$this->process($q);
		return $result;
	}
	function  is_uname_exist($uname)
      { 
		$this->query="select *  from tbl_login where user_name='$uname'";
		$result=$this->process($this->query);
		$exist=mysqli_num_rows($result);
		return $exist;
		
      }
	function addcompanyregi($cname,$address,$city,$procestype,$mauf_items,$dealer_of,$district,$pno,$lno,$uname,$logo)
	{
		$q="insert into tbl_company(coname,coadd,city,processtype,dealer_of,manuf_of,codistrict,pno,lno,username,logo)values('$cname','$address','$city','$procestype','$mauf_items','$dealer_of','$district','$pno','$lno','$uname','$logo')";
		return $this->process($q);
	}
	function load_fertilizer_name()
	{
		$this->query="select * from tbl_fertilizer";
		return $this->process($this->query);
	}*/
	function load_fertilizer($comp_id)
	{
		$q="select fr.*,fr1.fr_name as fername from tbl_comp_fertilizer fr, tbl_fertilizer fr1 where fr.fr_name=fr1.fr_id and fr.fr_company=$comp_id";
		$result=$this->process($q);
		return $result;
		
 	}
	
	function get_fertilizer_det($id)
	{
		$q="select fr.*,fr1.fr_name as fr_name1  from tbl_comp_fertilizer fr, tbl_fertilizer fr1 where fr.fr_name=fr1.fr_id and fr.fr_id=$id";
		$result=$this->process($q);
		return $result;
		
 	}
	
	
	
	
	
	
}
 ?>