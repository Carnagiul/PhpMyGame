
<div class="row">
    {foreach from=$buildings item=b}
        <div class="col-lg-4">
            <div class="ibox">
                <div class="ibox-title">
                    <span class="label label-primary float-right">{$b->getActualLevel()}</span>
                    <h5>{$b->getName()}</h5>
                </div>
                <div class="ibox-content">
                    <h4>Description</h4>
                    <p>
                        {$b->getDescr()}
                    </p>
                    <div>
                        <span>Evolution du Batiment:</span>
                        <div class="stat-percent">{($b->getActualLevel() / $b->getMaxLevel()) * 100}%</div>
                        <div class="progress progress-mini">
                            <div style="width: {($b->getActualLevel() / $b->getMaxLevel()) * 100}%;" class="progress-bar"></div>
                        </div>
                    </div>
                    <div class="row  m-t-sm">
                        {foreach from=$b->getCalcRess() item=ress}
                            <div class="col-sm-4">
                                <div class="font-bold">{$ress->getName()}</div>
                                {$ress->getRessAmount()}
                            </div>
                        {/foreach}
                    </div>
                </div>
                <div class="ibox-footer">
                    <div class="row">
                        <div class="col-lg-4">
                            <a class="btn btn-success" href="index.php?p=BuildingsUpgrade&ajax=on&id={$b->getId()}">Construire</a>
                        </div>
                        <div class="col-lg-4">
                            <a class="btn btn-info" href="index.php?p=BuildingsInfo&ajax=on&id={$b->getId()}">Info</a>
                        </div>
                        <div class="col-lg-4">
                            <a class="btn btn-warning" href="index.php?p=BuildingsDowngrade&ajax=on&id={$b->getId()}">Démolire</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    {/foreach}
</div>