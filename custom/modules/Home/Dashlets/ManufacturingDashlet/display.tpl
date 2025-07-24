{*
 * Manufacturing Dashlet Display Template
 * Shows placeholder manufacturing data and graph
 *}

<div class="dashlet-body" style="padding: 15px;">
        
        {* Manufacturing Metrics Summary *}
        <div class="manufacturing-metrics" style="margin-bottom: 15px;">
            <div class="row">
                <div class="col-xs-6 col-sm-3">
                    <div class="metric-box" style="text-align: center; padding: 10px; background: #f8f9fa; border-radius: 4px; margin: 5px;">
                        <div style="font-size: 18px; font-weight: bold; color: #28a745;">{$manufacturing_data.production_status}</div>
                        <div style="font-size: 12px; color: #6c757d;">Production Status</div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="metric-box" style="text-align: center; padding: 10px; background: #f8f9fa; border-radius: 4px; margin: 5px;">
                        <div style="font-size: 18px; font-weight: bold; color: #007bff;">{$manufacturing_data.quality_score}</div>
                        <div style="font-size: 12px; color: #6c757d;">Quality Score</div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="metric-box" style="text-align: center; padding: 10px; background: #f8f9fa; border-radius: 4px; margin: 5px;">
                        <div style="font-size: 18px; font-weight: bold; color: #17a2b8;">{$manufacturing_data.efficiency}</div>
                        <div style="font-size: 12px; color: #6c757d;">Efficiency</div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3">
                    <div class="metric-box" style="text-align: center; padding: 10px; background: #f8f9fa; border-radius: 4px; margin: 5px;">
                        <div style="font-size: 18px; font-weight: bold; color: #fd7e14;">{$manufacturing_data.active_orders}</div>
                        <div style="font-size: 12px; color: #6c757d;">Active Orders</div>
                    </div>
                </div>
            </div>
        </div>

        {* Placeholder Chart Area *}
        <div class="manufacturing-chart" style="text-align: center; background: #ffffff; border: 1px solid #dee2e6; border-radius: 4px; padding: 20px;">
            
            {* SVG Placeholder Chart *}
            <svg width="100%" height="200" viewBox="0 0 400 200" style="max-width: 400px;">
                <defs>
                    <linearGradient id="productionGradient" x1="0%" y1="0%" x2="0%" y2="100%">
                        <stop offset="0%" style="stop-color:#007bff;stop-opacity:0.3" />
                        <stop offset="100%" style="stop-color:#007bff;stop-opacity:0.1" />
                    </linearGradient>
                </defs>
                
                {* Chart Background *}
                <rect width="100%" height="100%" fill="#f8f9fa" rx="4"/>
                
                {* Chart Title *}
                <text x="200" y="25" text-anchor="middle" style="font-size: 14px; font-weight: bold; fill: #495057;">Production Timeline</text>
                
                {* Sample Chart Lines *}
                <polyline fill="none" stroke="#007bff" stroke-width="2" 
                    points="50,150 100,120 150,80 200,90 250,60 300,70 350,40"/>
                
                {* Fill area under the line *}
                <polygon fill="url(#productionGradient)" 
                    points="50,150 100,120 150,80 200,90 250,60 300,70 350,40 350,170 50,170"/>
                
                {* Data points *}
                <circle cx="50" cy="150" r="3" fill="#007bff"/>
                <circle cx="100" cy="120" r="3" fill="#007bff"/>
                <circle cx="150" cy="80" r="3" fill="#007bff"/>
                <circle cx="200" cy="90" r="3" fill="#007bff"/>
                <circle cx="250" cy="60" r="3" fill="#007bff"/>
                <circle cx="300" cy="70" r="3" fill="#007bff"/>
                <circle cx="350" cy="40" r="3" fill="#007bff"/>
                
                {* Axis labels *}
                <text x="50" y="185" text-anchor="middle" style="font-size: 10px; fill: #6c757d;">Mon</text>
                <text x="100" y="185" text-anchor="middle" style="font-size: 10px; fill: #6c757d;">Tue</text>
                <text x="150" y="185" text-anchor="middle" style="font-size: 10px; fill: #6c757d;">Wed</text>
                <text x="200" y="185" text-anchor="middle" style="font-size: 10px; fill: #6c757d;">Thu</text>
                <text x="250" y="185" text-anchor="middle" style="font-size: 10px; fill: #6c757d;">Fri</text>
                <text x="300" y="185" text-anchor="middle" style="font-size: 10px; fill: #6c757d;">Sat</text>
                <text x="350" y="185" text-anchor="middle" style="font-size: 10px; fill: #6c757d;">Sun</text>
            </svg>
            
            <div style="margin-top: 10px; font-size: 12px; color: #6c757d;">
                Placeholder chart - Connect to real manufacturing data
            </div>
        </div>

        {* Quick Actions *}
        <div class="manufacturing-actions" style="margin-top: 15px; text-align: center;">
            <button class="btn btn-sm btn-outline-primary" style="margin: 0 5px;" disabled>
                <span class="suitepicon suitepicon-action-view-record"></span> View Details
            </button>
            <button class="btn btn-sm btn-outline-secondary" style="margin: 0 5px;" disabled>
                <span class="suitepicon suitepicon-module-reports"></span> Reports
            </button>
            <button class="btn btn-sm btn-outline-info" style="margin: 0 5px;" disabled>
                <span class="suitepicon suitepicon-action-settings"></span> Configure
            </button>
        </div>
        
    </div> 