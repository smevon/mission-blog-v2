@extends('_layouts.master')

@section('title', 'Consultanta')

@section('content')
<!-- Change or deletion of the name attributes in the input tag will lead to empty values on record submission-->
<form action='https://forms.zohopublic.eu/rus/form/Consultan/formperma/rIioBjyLRsyblo6y3t5ccuukOP6EDRH7_Wt6zMCWvl4/htmlRecords/submit' name='form' id='form' method='POST' accept-charset='UTF-8' enctype='multipart/form-data'>
<input type="hidden" name="zf_referrer_name" value=""><!-- To Track referrals , place the referrer name within the " " in the above hidden input field -->
<input type="hidden" name="zf_redirect_url" value=""><!-- To redirect to a specific page after record submission , place the respective url within the " " in the above hidden input field -->
<input type="hidden" name="zc_gad" value=""><!-- If GCLID is enabled in Zoho CRM Integration, click details of AdWords Ads will be pushed to Zoho CRM -->
<h2>Consultanță</h2>
<p>Te invit la un pahar de comunicare structurată. Sunt curios să vorbim despre soluțiile la problema ta.</p>
<!--Single Line-->
<label>Prenumele tău preferat
<em>*</em>
</label>
<input  type="text" name="SingleLine" value="Victoria" fieldType=1 maxlength="255" />
<p>Dacă ai două sau mai multe, alege unul.</p>
<!--Email-->
<label>Email pe care îl folosești zilnic
<em>*</em>
</label>
<input type="text" maxlength="255" name="Email" value="" fieldType=9 />
<p>Vei primi destul de repede emailuri de la mine, așa că pune-l pe cel mai des folosit.</p>
<!--Dropdown-->
<label>Ce rol ai în companie?
<em>*</em>
</label>
<select name="Dropdown"><option selected="true" value="-Select-">-Select-</option>
<option value="Fondator">Fondator</option>
<option value="Antreprenor&#x20;&#x28;CEO&#x29;">Antreprenor &#x28;CEO&#x29;</option>
<option value="Manager">Manager</option>
<option value="Reprezentat&#x20;Customer&#x20;Care">Reprezentat Customer Care</option>
</select>
<p>Este important să știu cu cine discut. Alege varianta care te reprezintă.</p>
<!--Phone-->
<label>Telefon
<em>*</em>
</label>
<input type="text" compname="PhoneNumber_countrycodeval" name="PhoneNumber_countrycodeval" phoneFormat="1" maxlength="10"  id="international_PhoneNumber_countrycodeval" />
<label>Code</label>
<input type="text" compname="PhoneNumber" name="PhoneNumber_countrycode" phoneFormat="1" isCountryCodeEnabled=true maxlength="20" value="" fieldType=11 id="international_PhoneNumber_countrycode" />
<label>Number</label>
<p>De cele mai multe ori putem să ne înțelegem mai repede la telefon.</p>
<!--Website-->
<label>Site-ul companiei tale
<em>*</em>
</label>
<input type="text" maxlength="2083" name="Website" value=""/>
<p>Dacă nu ai, pune-l pe al meu să poți continua.</p>
<!--Multi Line-->
<label>Descrie situația prin care treci
<em>*</em>
</label>
<textarea name="MultiLine" maxlength="65535"></textarea>
<p>Folosește cuvintele tale și descrie situația pe care vrei să o rezolvi.</p>
<!--Date and Time-->
<label>Când preferi să avem o primă discuție de 15 minute online?
<em>*</em>
</label>
<input name="DateTime_date" type="text" maxlength="15" value="" />
<label>dd-MMM-yyyy</label>
<select name="DateTime_hours"><option value=""></option>
<option>00</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
</select><label>HH</label>
<span>:</span> <select name="DateTime_minutes"><option value=""></option>
<option>00</option>
<option>01</option>
<option>02</option>
<option>03</option>
<option>04</option>
<option>05</option>
<option>06</option>
<option>07</option>
<option>08</option>
<option>09</option>
<option>10</option>
<option>11</option>
<option>12</option>
<option>13</option>
<option>14</option>
<option>15</option>
<option>16</option>
<option>17</option>
<option>18</option>
<option>19</option>
<option>20</option>
<option>21</option>
<option>22</option>
<option>23</option>
<option>24</option>
<option>25</option>
<option>26</option>
<option>27</option>
<option>28</option>
<option>29</option>
<option>30</option>
<option>31</option>
<option>32</option>
<option>33</option>
<option>34</option>
<option>35</option>
<option>36</option>
<option>37</option>
<option>38</option>
<option>39</option>
<option>40</option>
<option>41</option>
<option>42</option>
<option>43</option>
<option>44</option>
<option>45</option>
<option>46</option>
<option>47</option>
<option>48</option>
<option>49</option>
<option>50</option>
<option>51</option>
<option>52</option>
<option>53</option>
<option>54</option>
<option>55</option>
<option>56</option>
<option>57</option>
<option>58</option>
<option>59</option>
</select><label>MM</label>
<p>Alege ora la care ai vrea să înceapă întâlnirea de cunoaștere.</p>
<label>Îți mulțumesc pentru încredere.<br /><br /><div><span class="size" style="font-size: 10.6667px"><i>Pentru întâlnire ți-am pregătit și un banc.</i></span></div></label>
<button type="submit"><em>Submit</em></button></form>
@endsection
