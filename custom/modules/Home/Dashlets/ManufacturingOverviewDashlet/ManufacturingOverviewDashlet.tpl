<!-- Manufacturing Overview Dashlet Display Template -->
<div id="manufacturing_overview_{$id}" style="height: {$height}px; overflow: auto;">
    <div style="display: flex; justify-content: space-between; margin-bottom: 15px;">
        <div style="flex: 1; padding: 10px; background: #f8f9fa; border-radius: 5px; margin-right: 10px;">
            <h4 style="margin: 0 0 5px 0; color: #d32f2f;">Low Inventory Products</h4>
            <div style="font-size: 24px; font-weight: bold; color: #d32f2f;">{$low_inventory_count}</div>
            <small>Products below threshold</small>
        </div>
        <div style="flex: 1; padding: 10px; background: #f8f9fa; border-radius: 5px;">
            <h4 style="margin: 0 0 5px 0; color: #1976d2;">Production Opportunities</h4>
            <div style="font-size: 24px; font-weight: bold; color: #1976d2;">{$production_opps_count}</div>
            <small>Active opportunities</small>
        </div>
    </div>
    
    <div style="text-align: center; margin-top: 15px;">
        <h4>Inventory Overview</h4>
        <canvas id="{$canvas_id}" width="{$chart_width}" height="{$chart_height}" class="resizableCanvas">[No canvas support]</canvas>
    </div>
</div>

<script type="text/javascript">
{literal}
SUGAR.util.doWhen("typeof RGraph !== 'undefined'", function(){
{/literal}
    var pie = new RGraph.Pie({
        id: '{$canvas_id}',
        data: {$chart_data},
        options: {
            labels: {$chart_labels},
            colors: {$chart_colors},
            strokestyle: '#e8e8e8',
            linewidth: 2,
            shadowBlur: 5,
            shadowOffsetx: 3,
            shadowOffsety: 3,
            shadowColor: '#aaa',
            tooltips: ['Low inventory products: ' + {$chart_data}[0], 'Normal inventory products: ' + {$chart_data}[1]],
            tooltipsEvent: 'mousemove',
            textSize: 10,
            textColor: '#333',
            key: {$chart_labels},
            keyPosition: 'gutter',
            keyBackground: 'rgba(255,255,255,0.7)',
            tooltipsCssClass: 'rgraph_chart_tooltips_css'
        }
    }).draw();
{literal}
});
{/literal}
</script> 