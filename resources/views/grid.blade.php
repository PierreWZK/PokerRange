@vite('resources/css/grid.css')
@vite('resources/css/grid_utilities.css')

<div id="grid">
    <div id="settingsTab">
        <!-- Edit -->
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block; margin-bottom: 10px;">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8114 1.06179C15.2272 -0.35393 17.5225 -0.353929 18.9382 1.06179C20.3539 2.47751 20.3539 4.77284 18.9382 6.18856L6.77302 18.3538C6.65607 18.4707 6.51027 18.5546 6.35041 18.597L1.17782 19.9687C0.854267 20.0545 0.50952 19.9612 0.273298 19.7241C0.0370762 19.4869 -0.0547784 19.1418 0.032298 18.8186L1.43395 13.616C1.47665 13.4575 1.5602 13.313 1.67626 13.197L13.8114 1.06179ZM17.6124 2.38761C16.9289 1.70413 15.8207 1.70413 15.1373 2.38761L14.1158 3.40909L16.5909 5.88422L17.6124 4.86274C18.2959 4.17925 18.2959 3.0711 17.6124 2.38761ZM15.2651 7.21004L12.79 4.73491L3.17923 14.3456L2.26456 17.7407L5.62575 16.8494L15.2651 7.21004Z" fill="white"/>
        </svg>
        <!-- Save -->
        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: block; margin-top: 10px;">
            <path d="M0 19C0 19.2652 0.105357 19.5196 0.292893 19.7071C0.48043 19.8946 0.734784 20 1 20H19C19.2652 20 19.5196 19.8946 19.7071 19.7071C19.8946 19.5196 20 19.2652 20 19V6C19.9999 5.73481 19.8946 5.48049 19.707 5.293L14.707 0.293C14.5195 0.105451 14.2652 5.66374e-05 14 0H1C0.734784 0 0.48043 0.105357 0.292893 0.292893C0.105357 0.48043 0 0.734784 0 1V19ZM13 18H7V13H13V18ZM2 2H13.586L18 6.414V18H15V12C15 11.7348 14.8946 11.4804 14.7071 11.2929C14.5196 11.1054 14.2652 11 14 11H6C5.73478 11 5.48043 11.1054 5.29289 11.2929C5.10536 11.4804 5 11.7348 5 12V18H2V2ZM5 7C5 6.73478 5.10536 6.48043 5.29289 6.29289C5.48043 6.10536 5.73478 6 6 6H10C10.2652 6 10.5196 6.10536 10.7071 6.29289C10.8946 6.48043 11 6.73478 11 7C11 7.26522 10.8946 7.51957 10.7071 7.70711C10.5196 7.89464 10.2652 8 10 8H6C5.73478 8 5.48043 7.89464 5.29289 7.70711C5.10536 7.51957 5 7.26522 5 7Z" fill="white"/>
        </svg>
    </div>
    <div id="tabRange">
        <table cellspacing="0" cellpadding="10">
            <tr>
                <td class="check-fold fake_raise-4bet">AA</td>
                <td class="check-fold fake_call-3bet">AKs</td>
                <td class="check-fold fake_call-3bet">AQs</td>
                <td class="check-fold fake_open-raise">AJs</td>
                <td class="check-fold fake_open-raise">ATs</td>
                <td class="check-fold">A9s</td>
                <td class="check-fold">A8s</td>
                <td class="check-fold">A7s</td>
                <td class="check-fold">A6s</td>
                <td class="check-fold">A5s</td>
                <td class="check-fold">A4s</td>
                <td class="check-fold">A3s</td>
                <td class="check-fold">A2s</td>
            </tr>
            <tr>
                <td class="check-fold fake_call-3bet">AKo</td>
                <td class="check-fold fake_call-3bet">KK</td>
                <td class="check-fold fake_call-3bet">KQs</td>
                <td class="check-fold fake_open-raise">KJs</td>
                <td class="check-fold fake_open-raise">KTs</td>
                <td class="check-fold">K9s</td>
                <td class="check-fold">K8s</td>
                <td class="check-fold">K7s</td>
                <td class="check-fold">K6s</td>
                <td class="check-fold">K5s</td>
                <td class="check-fold">K4s</td>
                <td class="check-fold">K3s</td>
                <td class="check-fold">K2s</td>
            </tr>
            <tr>
                <td class="check-fold fake_call-3bet">AQo</td>
                <td class="check-fold fake_open-raise">KQo</td>
                <td class="check-fold fake_call-3bet">QQ</td>
                <td class="check-fold fake_open-raise">QJs</td>
                <td class="check-fold fake_open-raise">QTs</td>
                <td class="check-fold">Q9s</td>
                <td class="check-fold">Q8s</td>
                <td class="check-fold">Q7s</td>
                <td class="check-fold">Q6s</td>
                <td class="check-fold">Q5s</td>
                <td class="check-fold">Q4s</td>
                <td class="check-fold">Q3s</td>
                <td class="check-fold">Q2s</td>
            </tr>
            <tr>
                <td class="check-fold fake_open-raise">AJo</td>
                <td class="check-fold">KJo</td>
                <td class="check-fold">QJo</td>
                <td class="check-fold fake_call-3bet">JJ</td>
                <td class="check-fold fake_open-raise">JTs</td>
                <td class="check-fold fake_open-raise">J9s</td>
                <td class="check-fold">J8s</td>
                <td class="check-fold">J7s</td>
                <td class="check-fold">J6s</td>
                <td class="check-fold">J5s</td>
                <td class="check-fold">J4s</td>
                <td class="check-fold">J3s</td>
                <td class="check-fold">J2s</td>
            </tr>
            <tr>
                <td class="check-fold">ATo</td>
                <td class="check-fold">KTo</td>
                <td class="check-fold">QTo</td>
                <td class="check-fold">JTo</td>
                <td class="check-fold fake_call-3bet">TT</td>
                <td class="check-fold fake_open-raise">T9s</td>
                <td class="check-fold">T8s</td>
                <td class="check-fold">T7s</td>
                <td class="check-fold">T6s</td>
                <td class="check-fold">T5s</td>
                <td class="check-fold">T4s</td>
                <td class="check-fold">T3s</td>
                <td class="check-fold">T2s</td>
            </tr>
            <tr>
                <td class="check-fold">A9o</td>
                <td class="check-fold">K9o</td>
                <td class="check-fold">Q9o</td>
                <td class="check-fold">J9o</td>
                <td class="check-fold">T9o</td>
                <td class="check-fold fake_open-raise">99</td>
                <td class="check-fold fake_open-raise">98s</td>
                <td class="check-fold">97s</td>
                <td class="check-fold">96s</td>
                <td class="check-fold">95s</td>
                <td class="check-fold">94s</td>
                <td class="check-fold">93s</td>
                <td class="check-fold">92s</td>
            </tr>
            <tr>
                <td class="check-fold">A8o</td>
                <td class="check-fold">K8o</td>
                <td class="check-fold">Q8o</td>
                <td class="check-fold">J8o</td>
                <td class="check-fold">T8o</td>
                <td class="check-fold">98o</td>
                <td class="check-fold fake_open-raise">88</td>
                <td class="check-fold fake_open-raise">87s</td>
                <td class="check-fold">86s</td>
                <td class="check-fold">85s</td>
                <td class="check-fold">84s</td>
                <td class="check-fold">83s</td>
                <td class="check-fold">82s</td>
            </tr>
            <tr>
                <td class="check-fold">A7o</td>
                <td class="check-fold">K7o</td>
                <td class="check-fold">Q7o</td>
                <td class="check-fold">J7o</td>
                <td class="check-fold">T7o</td>
                <td class="check-fold">97o</td>
                <td class="check-fold">87o</td>
                <td class="check-fold fake_open-raise">77</td>
                <td class="check-fold fake_open-raise">76s</td>
                <td class="check-fold">75s</td>
                <td class="check-fold">74s</td>
                <td class="check-fold">73s</td>
                <td class="check-fold">72s</td>
            </tr>
            <tr>
                <td class="check-fold">A6o</td>
                <td class="check-fold">K6o</td>
                <td class="check-fold">Q6o</td>
                <td class="check-fold">J6o</td>
                <td class="check-fold">T6o</td>
                <td class="check-fold">96o</td>
                <td class="check-fold">86o</td>
                <td class="check-fold">76o</td>
                <td class="check-fold fake_open-raise">66</td>
                <td class="check-fold fake_open-raise">65s</td>
                <td class="check-fold">64s</td>
                <td class="check-fold">63s</td>
                <td class="check-fold">62s</td>
            </tr>
            <tr>
                <td class="check-fold">A5o</td>
                <td class="check-fold">K5o</td>
                <td class="check-fold">Q5o</td>
                <td class="check-fold">J5o</td>
                <td class="check-fold">T5o</td>
                <td class="check-fold">95o</td>
                <td class="check-fold">85o</td>
                <td class="check-fold">75o</td>
                <td class="check-fold">65o</td>
                <td class="check-fold fake_open-raise">55</td>
                <td class="check-fold fake_open-raise">54s</td>
                <td class="check-fold">53s</td>
                <td class="check-fold">52s</td>
            </tr>
            <tr>
                <td class="check-fold">A4o</td>
                <td class="check-fold">K4o</td>
                <td class="check-fold">Q4o</td>
                <td class="check-fold">J4o</td>
                <td class="check-fold">T4o</td>
                <td class="check-fold">94o</td>
                <td class="check-fold">84o</td>
                <td class="check-fold">74o</td>
                <td class="check-fold">64o</td>
                <td class="check-fold">54o</td>
                <td class="check-fold fake_open-raise">44</td>
                <td class="check-fold fake_open-raise">43s</td>
                <td class="check-fold">42s</td>
            </tr>
            <tr>
                <td class="check-fold">A3o</td>
                <td class="check-fold">K3o</td>
                <td class="check-fold">Q3o</td>
                <td class="check-fold">J3o</td>
                <td class="check-fold">T3o</td>
                <td class="check-fold">93o</td>
                <td class="check-fold">83o</td>
                <td class="check-fold">73o</td>
                <td class="check-fold">63o</td>
                <td class="check-fold">53o</td>
                <td class="check-fold">43o</td>
                <td class="check-fold fake_open-raise">33</td>
                <td class="check-fold">32s</td>
            </tr>
            <tr>
                <td class="check-fold">A2o</td>
                <td class="check-fold">K2o</td>
                <td class="check-fold">Q2o</td>
                <td class="check-fold">J2o</td>
                <td class="check-fold">T2o</td>
                <td class="check-fold">92o</td>
                <td class="check-fold">82o</td>
                <td class="check-fold">72o</td>
                <td class="check-fold">62o</td>
                <td class="check-fold">52o</td>
                <td class="check-fold">42o</td>
                <td class="check-fold">32o</td>
                <td class="check-fold">22</td>
            </tr>
        </table>
    </div>

    <div id="legend">
        {{-- @* @Html.Partial("~/Views/Home/Layout/Legend.cshtml") *@ --}}
    </div>
</div>
