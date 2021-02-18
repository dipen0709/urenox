<div class="sidebar">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red"
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                {{ trans("common.SITE_FIRST") }}
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                {{ trans("common.SITE_NAME_HEADER") }}
            </a>
        </div>
        <ul class="nav">
            <li class="active">
                <a href="{{route('dashboard')}}">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>{{ trans("common.label_common_dashboard") }}</p>
                </a>
            </li>
            <li>
                <a data-toggle="collapse" href="#pagesExamples">
                    <i class="tim-icons icon-image-02"></i>
                    <p>
                        Pages
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse" id="pagesExamples">
                    <ul class="nav">
                        <li>
                            <a href="../examples/pages/pricing.html">
                                <span class="sidebar-mini-icon">P</span>
                                <span class="sidebar-normal"> Pricing </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/pages/rtl.html">
                                <span class="sidebar-mini-icon">RS</span>
                                <span class="sidebar-normal"> RTL Support </span>
                            </a>
                        </li>
                        <li>
                            <a href="../examples/pages/timeline.html">
                                <span class="sidebar-mini-icon">T</span>
                                <span class="sidebar-normal"> Timeline </span>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </li>                        
        </ul>
    </div>
</div>