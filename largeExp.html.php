<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2015/1/28
 * Time: 11:09
 */
?>
<?php include 'include/header.html.php' ?>
    <div id="container">
        <?php include 'include/nav.html.php' ?>
        <div id="content">
            <h2 class="alignCenter"><?php echo $theSubtitle['name']; ?></h2>
            <table class="posCenter">
                <tr class="bkGray txtCenter clrRed">
                    <th>Project from 1999 to 2003: Home Design and Improvement System</th>
                </tr>
                <tr>
                    <td>
                        <h2 class="txtCenter clrDarkBlue">Software Engineering Laboratory Project</h2>
                        <h3 class="txtCenter">Home Design and Improvement System</h3>
                        <div class="lineHeightHigh">
                            <p>The Home Design and Improvement System, HDIS, is intended to integrate and unify all activities related to construction and improvements of homes. Constructing a new home or renovating an existing home can require a high number of interactions with numerous individuals, companies, and stores. The purpose of HDIS is to utilize computing technology in a positive way to enhance, facilitate, and promote this activity. To do so, there is a requirement for interactions with the following individuals and services:</p>
                            <ul>
                                <li>Suppliers of construction and improvement goods, e.g., lumber yards, hardware stores, plumbing, electrical, and lighting supply stores, garden centers, flooring and furniture stores, etc.</li>
                                <li>Contractors of construction services, e.g., general, electrical, plumbing, paving, foundation, security, landscape, etc.</li>
                                <li>Architects for new home and improvement design that includes cost estimation and high-tech display capabilities. In this situation, HDIS may need to be integrated with available software systems that already provide these capabilities.</li>
                                <li>Interior designers for lighting, furniture, wallpaper and window treatments, rugs, etc.</li>
                                <li>Landscape designers for all outside flowers, shrubs, trees, walkways, fences, pools, etc.</li>
                                <li>Financial institutions for new home mortgages and home equity / improvement loans. In this case, HDIS will likely interact with commercial systems.</li>
                                <li>Home owners to allow them to track all aspects of their project and if desired to function as the general contractor for managing and scheduling all of the construction work.
                                    Some of the previous individuals and services (like architects and financial institutions) will also need to support interactions with existing commercial software.
                                    To support the functional and operational requirements of HDIS, there are a number of databases that must be present:</li>
                                <li>House Plan Database: Contains the blueprints and construction supply lists for thousands of different homes. The construction supply list is helpful in ordering all of the materials that are needed to build or renovate a home. The blueprints are also needed for landscape and lighting designs, which also have associated materials (plants and light fixtures).</li>
                                <li>Supplier Databases: These are databases that contain a list of the materials or items that are available (including pricing information) at each of the suppliers. For example, a lumber yard supplier database would contain the different types of dimensional lumber, windows and doors, nailing, roofing materials, etc.</li>
                                <li>Schedule Database: Needed to allow the entire project to be tracked, to insure that goods are delivered when needed and contractors work is allocated correctly. For example, on a new home, the plumbers and electricians must finish their work, and have that work be inspected, before the plasters can begin to work on the inside walls.</li>
                                <li>Accounting Database: Allows a homeowner to track both incoming (from loans) and outgoing funds. The outgoing funds pay for both goods and services.</li>
                                <li>Contractor/Designer Database: Contains information on all of the available contractors and designers in a particular area (county or state).</li>
                                <li>Financial Database: Contains information on all of the financial institutions that lend money in a particular area (county or state). The up-to-date interest rates for different loan options would also be stored.</li>
                            </ul>
                            <p>These database are critical for supporting and promoting the sharing and exchange of information among the many individuals that require access to HDIS.</p>
                            <p>All of the previous individuals and services will require specialized user interfaces to handle the information and processing that is required. Some possible interfaces include:</p>
                            <ul>
                                <li>Contractor Interface: Allows a contractor to view house plans and submit bids for the jobs. To do so, this interface will also have to interact with supplier databases so that cost estimation can occur.</li>
                                <li>Architectural Interface: Allows the house plans to be electronically accessed and viewed. The viewing may occur via another system that is geared towards architectural design. Some emerging systems in this field allow users to walk through the house in a simulated three-dimensional mode.</li>
                                <li>Landscape Interface: Similar to Architectural Interface for landscape design.</li>
                                <li>Schedule, Supplier, and Funding Interfaces: Separate interfaces to support the scheduling of goods and services, the access to supplier data including pricing, and an electronic means to submit a loan application.</li>
                                <li>Home Owner Interface: The home owner interface must contain many of the features of all of the different interfaces, particularly for those situations where a home owner is acting as his/her own general contractor.</li>
                            </ul>
                            <p>Remember, this is not an exhaustive list of all user interfaces for HDIS.</p>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="bkGray clrRed txtCenter">Project from 2004 to 2006: Banking System</th>
                </tr>
                <tr>
                    <td>
                        <pre>
    SE银行储蓄业务说明
    SE银行贷款审批发放流程
    SE银行贷款业务说明
    SE银行核心数据调整流程
    SE银行外汇交易业务说明
    SE银行网上购物平台协议
    SE银行网上银行介绍
    SE银行系统用户权限控制
    SE银行信用卡审批流程
    SE银行信用卡业务说明
    银行系统分组</pre>
                    </td>
                </tr>
                <tr>
                    <th class="bkGray clrRed txtCenter">Project from 2007 to present: Stock Trading System</th>
                </tr>
                <tr>
                    <td class="lineHeightHigh">
                        <p class="paraIndent"><span>股票交易系统</span></p>
                        <p>一个完整的股票交易系统包括以下组成部分：</p>
                        <dl>
                            <dt>证券账户业务</dt>
                            <dd>实现证券账户业务相关业务逻辑。开发工作人员管理界面，用于证券账户的开户、挂失与重新开户、销户。</dd>
                            <dt>资金账户业务</dt>
                            <dd>实现资金账户相关业务逻辑。开发工作人员界面，用于录入用户信息，审批，开户，修改、密码，存款，取款，挂失，销户，资金信息查询。并实现资金账户和账户的关联。</dd>
                            <dt>交易客户端</dt>
                            <dd>实现股票交易客户端的相关业务逻辑。开发用户界面，包括用户客户端申请，首次登陆，登陆，查看股票价格，查询资金账户里面的现金，查询证券账户里面的股票情况，发出购买和出售股票信息，显示交易结果。</dd>
                            <dt>股票中央交易系统</dt>
                            <dd>实现股票场内交易相关业务逻辑。开发一个股票的中央交易系统，对用户发出的购买和出售股票的指令首先保存。然后匹配同一个股票的相关指令，将价格合适的两个指令进行撮合，并将交易结果放入不同的证券账户进行保存，然后修改已经匹配指令的信息。</dd>
                            <dt>网上信息发布</dt>
                            <dd>实现交易信息的实时发布逻辑。对每一个股票最新的交易结果，以及近期的交易结果进行统计，并且在网站上面发布，以供用户查询。用户可以输入股票名字或代码来对股票的相关信息进行查询。</dd>
                            <dt>交易系统管理</dt>
                            <dd>实现交易系统管理员对交易系统监控管理的功能。开发一个工作人员管理界面，通过识别不同用户的授权，可以查看不同股票的所有指令的数量，价格以及买卖数量的全部信息。</dd>
                        </dl>
                        <p>说明：系统安全性暂时不考虑，但是需要实现必要的登陆信息确认，同时还要保证第一次登陆时的安全证书的认证。</p>
                        <br />
                        <p class="paraIndent"><span>证券帐户业务</span></p>
                        <ol>
                            <li>开设证券帐户 </li>
                                <div>
                                <p>办理证券帐户是走进股市的第一步。证券帐户可以视为投资者进入股票交易市场的通行证，只有拥有它，才能进场买卖证券。 </p>
                                <p>想要开设证券帐户，开户人必须不是国家规定禁止开户的四类人员，其他人员均可以凭相关证件到交易所申请开设证券帐户：</p>
                                <ul>
                                    <li>证券相关从业人员（不得开立股票帐户）；</li>
                                    <li>未成年人未经法定监护人的代理或允许者；</li>
                                    <li>未经授权代理法人开户者；</li>
                                    <li>因违反证券法规，经有权机关认定为市场禁入者且期限未满者；</li>
                                </ul>
                                <p>证券帐户分为两种，分别时自然人开设的个人帐户，以及法人帐户。每个投资者，都只能开立一个证券帐户，并仅限于本人使用。</p>
                                <p>自然人开立的证券帐户为个人帐户。开立个人帐户时，投资者必须持有效的身份证件（一般为居民身份证）去证券交易所指定的证券登记机构或会员证券公司办理名册登记并开立证券帐户。个人投资者在开立证券帐户时，应载明:</p>
                                <ul>
                                    <li>个人股票帐户号码</li>
                                    <li>登记日期</li>
                                    <li>个人的姓名</li>
                                    <li>本人性别</li>
                                    <li>本人身份证号码</li>
                                    <li>本人家庭地址</li>
                                    <li>本人职业</li>
                                    <li>本人学历</li>
                                    <li>本人工作单位</li>
                                    <li>本人联系电话</li>
                                    <li>如果请人代办，代办人还须提供身份证</li>
                                </ul>
                                <p>法人开立股票帐户称为法人帐户，法人帐户应载明：</p>
                                <ul>
                                    <li>法人股票帐户号码</li>
                                    <li>有效的法人注册登记号码</li>
                                    <li>营业执照号码</li>
                                    <li>法定代表人的身份证号码</li>
                                    <li>法人姓名</li>
                                    <li>法人联系电话</li>
                                    <li>法人联系地址 </li>
                                    <li>法定代表人授权证券交易执行人的姓名</li>
                                    <li>授权人有效身份证号码</li>
                                    <li>授权人联系电话</li>
                                    <li>授权人地址</li>
                                </ul>
                            </div>
                            <li>挂失，补办证券帐户 </li>
                                <div>
                                    <p>如遇投资者的证券帐户不慎丢失，为维护已办理指定交易的投资者利益，需要对证券账号实行挂失并办理重新开户手续。在具体操作中，挂失有序按照一下手续进行：</p>
                                    <ul>
                                        <li>认真审查投资者的本人身份证或法人注册登记号;</li>
                                        <li>证券帐户下所有的证券予以冻结;</li>
                                        <li>按照开户的手续，重新申请证券帐户;</li>
                                        <li>拿到证券帐户卡后，投资者就可以进入市场买卖证券了;</li>
                                        <li>通过重新将证券帐号和资金账号关联，通过交易客户端买卖股票了。</li>
                                    </ul>
                                </div>
                            <li>销户证券帐户 </li>
                                <div>
                                    <p>如果您因各种原因不再使用证券帐户，可凭本人身份证和证券帐户卡到指定交易的证券营业部办理（未指定的必须先办理指定交易）证券帐户销户手续。投资者在办理证券帐户销户前，必须卖出该帐户中的所有证券。</p>
                                </div>
                        </ol>
                        <br />
                        <p class="paraIndent"><span>资金帐户业务</span></p>
                        <p>投资者委托买卖股票，须事先在证券经纪商处开立证券交易结算资金帐户，资金帐户用于投资者证券交易的资金清算，记录资金的币种，余额和变动情况。 </p>
                        <ol>
                            <li>开设资金帐户</li>
                                <div class="paraIndent">
                                    <p>设立资金帐户时，须提交本人身份证和证券帐户卡，并将资金帐户和证券帐户相关联，投资者在资金帐户中的存款可随时提取，证券经纪商按活期存款利率定期计付利息并自动转入投资者的资金帐户。投资者委托买入时，资金帐户要有足够的余额。资金帐户需要设置交易密码，以便在交易客户端使用。另外，还需要设置及取款密码，用于从资金帐户里面取出资金。帐户开设完毕，用户会得到一张类似于银行卡的，资金帐户卡片。通过在证券经纪商指定的交易客户端设备上面刷卡，并输入资金帐户设置的密码登陆，便可以发出买卖股票的指令，查看资金帐户的资金情况和证券帐户内的股票信息。</p>
                                    <p>活期储蓄是指无固定存期、可随时存取、存取金额不限的一种比较灵活的储蓄方式。人民币1元起存，外币起存金额为不低于1美元的等值外币。开户后发给存折，可以凭折随时存取。活期储蓄存款在办理存取业务时，应逐笔在帐页上结出利息余额。活期储蓄(存折)存款每年结息一次(每年六月三十日为结息日)。结息时把“元”以上利息并入本金，“元”以下角分部分转入下年利息余额内。活期储蓄存款在存入期间遇有利率调整，按结息日挂牌公告的活期储蓄存款利率计算利息。全部支取活期储蓄存款，按清户日挂牌公告的活期储蓄存款利率计付利息。</p>
                                </div>
                            <li>添加和取出资金</li>
                                <div class="paraIndent">
                                    <p>通过资金帐户卡和密码，投资者可以从证券经纪商处追加或者取出资金帐户内的可用现金。</p>
                                </div>
                            <li>修改资金帐户密码</li>
                                <div>
                                    <p class="paraIndent">资金帐户密码可以有两张方法修改:</p>
                                    <ul>
                                        <li>投资者可以在证券经纪商处在开设资金帐户的设备上，通过输入原有密码和新密码来修改；</li>
                                        <li>投资者还可以在证券交易客户端通过输入原有密码和新密码修改。</li>
                                    </ul>
                                </div>
                            <li>挂失，补办资金帐户</li>
                                <div>
                                    <p class="paraIndent">如遇投资者的资金帐户卡不慎丢失，为维护已办理指定交易的投资者利益，需要对资金帐户卡实行挂失并办理重新开户手续。在具体操作中，挂失有序按照一下手续进行：</p>
                                    <ul>
                                        <li>认真审查投资者的本人身份证或法人注册登记号以及证券帐户号码;</li>
                                        <li>资金帐户卡被注销，并且帐户内所有的资金予以冻结;</li>
                                        <li>证券帐户下所有的证券予以冻结;</li>
                                        <li>按照开户的手续，重新办理资金帐户;</li>
                                        <li>新资金帐户将会将复制丢失的资金帐户的全部信息，包括资金数量。此时资金和证券账号重新激活，投资者可以再次进行交易了。</li>
                                    </ul>
                                </div>
                            <li>资金帐户销户</li>
                                <div>
                                    <p class="paraIndent">资金帐户是用户在某个证券经纪商处开立证券交易结算资金帐户，如果遇到某种原因，用户需要更换证券经纪商，那么就需要对资金账户进行销户。销户的手续可以分一下几个步骤：</p>
                                    <ul>
                                        <li>投资者在销户之前，必须取出帐户内的所有现金;</li>
                                        <li>投资者通过证券经纪商，向证券交易中心申请将资金账号和证券账号分离。证券帐户被冻结，因为没有资金账号，所有投资者无法买卖股票;</li>
                                        <li>投资者在其他证券经纪商处，开设新的资金帐户并将其和证券帐户挂钩，然后又可以进入交易所进行交易。当然，如果需要购买新的股票，需要在资金帐户种存入足够的资金。</li>
                                    </ul>
                                </div>
                        </ol>
                        <br />
                        <p class="paraIndent"><span>交易客户端</span></p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
<?php include 'include/footer.html.php' ?>