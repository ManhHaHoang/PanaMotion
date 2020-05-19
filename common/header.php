<header class="site-header">
    <div class="site-w">
        <div class="site-logo">
            <img src="images/logo.png" alt="">
        </div>
        <?php include 'navigation.php';?>
        <form id="header-search" action="#" class="site-search">
            <span class="toggle-search" onclick="openSearch()">
                <svg id="openSearch" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 433.633 433.633" style="enable-background:new 0 0 433.633 433.633;" xml:space="preserve">
                    <path d="M428.931,406.465l-91.951-91.951c29.257-34.482,45.453-77.322,45.453-123.298
                    c0-105.012-85.682-190.694-191.216-190.694S0,86.204,0,191.216S85.682,381.91,191.216,381.91c45.976,0,88.816-16.196,123.298-45.453
                    l92.473,91.951c3.135,3.135,7.314,4.702,10.971,4.702c4.18,0,7.837-1.567,10.971-4.702C435.2,422.139,435.2,412.212,428.931,406.465
                    z M304.065,304.065c-30.302,29.78-70.008,46.498-112.849,46.498c-88.294,0-159.869-71.576-159.869-159.347
                    S102.922,31.869,191.216,31.869s159.869,71.576,159.869,159.347C351.086,234.057,334.367,274.286,304.065,304.065z"/>
                </svg>
                <svg id="closeSearch" class="hidden" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path style="fill: #910000" d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
            </span>
            <div class="search-content">
                <input id="searchName" type="text" name="" value="" placeholder="Nhập từ khóa bạn muốn tìm" class="input-text" onkeydown="showSearch()" onkeyUp="document.getElementById('keyWord').innerHTML = this.value">
                <button type="button" name="button" class="search-button">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 433.633 433.633" style="enable-background:new 0 0 433.633 433.633;" xml:space="preserve">
                        <path d="M428.931,406.465l-91.951-91.951c29.257-34.482,45.453-77.322,45.453-123.298
                        c0-105.012-85.682-190.694-191.216-190.694S0,86.204,0,191.216S85.682,381.91,191.216,381.91c45.976,0,88.816-16.196,123.298-45.453
                        l92.473,91.951c3.135,3.135,7.314,4.702,10.971,4.702c4.18,0,7.837-1.567,10.971-4.702C435.2,422.139,435.2,412.212,428.931,406.465
                        z M304.065,304.065c-30.302,29.78-70.008,46.498-112.849,46.498c-88.294,0-159.869-71.576-159.869-159.347
                        S102.922,31.869,191.216,31.869s159.869,71.576,159.869,159.347C351.086,234.057,334.367,274.286,304.065,304.065z"/>
                    </svg>
                </button>
            </div>
            <ul id="result-suggest">
                <!-- <li>
                    <a href="#">Result</a>
                </li> -->
                <li>
                    <span>Không tìm thấy kết quả cho từ khóa: <b id="keyWord"></b></span>
                </li>
            </ul>
        </form>
        <div id="open-menu" class="hide-mobile" onclick="openMenu()">
            <svg class="nav-icon" viewBox="0 -53 384 384" xmlns="http://www.w3.org/2000/svg"><path d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/><path d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"/></svg>
        </div>
        <div class="background-emty hide-mobile" onclick="openMenu()">
            <svg class="close-menu" viewBox="0 0 329.26933 329" width="329pt" xmlns="http://www.w3.org/2000/svg"><path d="m194.800781 164.769531 128.210938-128.214843c8.34375-8.339844 8.34375-21.824219 0-30.164063-8.339844-8.339844-21.824219-8.339844-30.164063 0l-128.214844 128.214844-128.210937-128.214844c-8.34375-8.339844-21.824219-8.339844-30.164063 0-8.34375 8.339844-8.34375 21.824219 0 30.164063l128.210938 128.214843-128.210938 128.214844c-8.34375 8.339844-8.34375 21.824219 0 30.164063 4.15625 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921875-2.089844 15.082031-6.25l128.210937-128.214844 128.214844 128.214844c4.160156 4.160156 9.621094 6.25 15.082032 6.25 5.460937 0 10.921874-2.089844 15.082031-6.25 8.34375-8.339844 8.34375-21.824219 0-30.164063zm0 0"/></svg>
        </div>
    </div>
</header>