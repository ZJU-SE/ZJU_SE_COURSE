<?php
/**
 * Created by PhpStorm.
 * User: Junxiang
 * Date: 2015/1/26
 * Time: 12:53
 */
?>
<?php include 'include/header.html.php' ?>
    <div id="container">
        <?php include 'include/nav.html.php' ?>
        <div id="content">
            <h2 class="alignCenter"><?php echo $theSubtitle['name']; ?></h2>
            <p><span>一、教学目的与基本要求：</span></p>
            <p><span>目的：</span></p>
            <p class="paraIndent">“软件工程”是面向高年级学生的计算机专业课程。本课程介绍了在软件开发过程中应用软件工程方法的必要性和迫切性，介绍了软件工程的基本原理、概念与技术方法。在让学生了解有关知识与方法的同时，采用实践相配合的方式提高学生对专业知识的综合应用能力与技能，使学生在接收理论知识的基础上提高并加强工程化知识与实践知识的教育，为学生在今后工作中从事计算机大规模软件开发与维护打下扎实的基础。 </p>
            <p><span>要求：</span></p>
            <p class="paraIndent">1、了解软件工程中基本原理、概念与方法，主要包括软件系统的管理、体系模型建立、需求分析、总体设计、详细设计、测试、维护等方面的基本知识与方法。 </p>
            <p class="paraIndent">2、学习掌握软件工程中的一些基本技术方法，如项目管理、数据流图、结构分析方法、面向对象分析方法、集成测试方法、软件生产各阶段的度量方法等。 </p>
            <p class="paraIndent">3、结合模拟案例，要求学生从实际中掌握软件开发过程的基本方法和技巧，以及软件开发新技术的应用。 </p>

            <p><span>二、主要内容及学时分配：</span></p>
            <p class="paraIndent">本课程课内学时为64学时，理论教学与实践教学的比例为1：1。具体学时安排如下所示： </p>
            <p class="paraIndent"><span>理论部分32学时</span> &nbsp; 重点介绍软件产品与过程、软件工程常规方法（包括面向结构与面向对象技术）、网络应用软件的开发方法，将软件工程管理的知识点穿插其中。 </p>
            <table style="width: 100%;">
                <tr>
                    <th scope="col">知识模块</th>
                    <th scope="col">教学内容</th>
                    <th scope="col">学时分配</th>
                </tr>

                <tr>
                    <td rowspan="2" scope="row"><span>第一部分<br />
                            软件产品与开发过程概述</span></td>
                    <td>软件产品的概念</td>
                    <td class="alignCenter">2</td>
                </tr>
                <tr>
                    <td>软件生产过程概述 <br />
                        ■ 定义约束 <br />
                        ■ 过程框架 <br />
                        ■ 实践原理 <br />
                        ■ 开发过程中的谬论 <br />
                        ■ 过程结构与评估 <br />
                        ■ 过程模型 <br />
                        ■ 软件工程中的人力因素<br />
                    </td>
                    <td class="alignCenter">3</td>
                </tr>
                <tr class="bkGray">
                    <td scope="row"><span>软件项目管理</span></td>
                    <td>基本概念</td>
                    <td class="alignCenter">1</td>
                </tr>

                <tr>
                    <td rowspan="4" scope="row"><span>第二部分<br />
                            软件工程的常规方法</span></td>
                    <td>软件工程建模准则 <br />
                        需求建模 <br />
                        ■ 概念 <br />
                        ■ 基于场景建模方式 <br />
                        ■ 基于类的建模方式 <br />
                        ■ 行为、模式、网页/移动端应用 <br />
                    </td>
                    <td class="alignCenter">4</td>
                </tr>
                <tr>
                    <td>质量概念 <br />
                        设计概念 <br />
                    </td>
                    <td class="alignCenter">2</td>
                </tr>
                <tr>
                    <td>结构设计 <br /></td>
                    <td class="alignCenter">2</td>
                </tr>
                <tr>
                    <td>网页应用设计 <br />
                        移动应用设计 <br />
                        构件级设计 <br />
                        UI界面设计 <br />
                        基于模式的设计 <br />
                        评审技术及软件质量保证 <br />
                    </td>
                    <td class="alignCenter">4</td>
                </tr>
                <tr class="bkGray">
                    <td scope="row"><span>软件项目管理</span></td>
                    <td>总体设计报告演讲</td>
                    <td class="alignCenter">2</td>
                </tr>

                <tr>
                    <td rowspan="3" scope="row"><span>第三部分<br />
                            质量管理</span></td>
                    <td>配置管理 <br />
                        测试策略 <br />
                    </td>
                    <td class="alignCenter">2</td>
                </tr>
                <tr>
                    <td>测试传统应用及面向对象应用 <br />
                        测试网页应用、移动端应用 <br />
                    </td>
                    <td class="alignCenter">4</td>
                </tr>
                <tr>
                    <td>安全工程 <br />
                        正式建模及验证 <br />
                    <td class="alignCenter">1</td>
                </tr>
                <tr class="bkGray">
                    <td scope="row"><span>软件项目管理</span></td>
                    <td>维护及再造工程 <br />
                        项目进度安排 <br />
                        风险管理 <br />
                        产品度量 <br />
                        敏捷开发 <br />
                        过程及项目度量 <br />
                        软件项目估算 <br />
                    </td>
                    <td class="alignCenter">5</td>
                </tr>
            </table>
            <br />
            <p class="paraIndent"><span>实践部分32学时</span> &nbsp; 通过从道富公司抽取出的大型模拟案例项目《股票交易系统》的开发，锻炼学生的系统设计、开发能力，谈判、沟通、写作能力，团队合作能力，全面培养学生的职业素养。整体项目分7个阶段验收：</p>
            <p>1．《子系统需求规格说明书》（4学时）</p>
            <p>2．《子系统设计报告》（演讲）（6学时）</p>
            <p>3．《子系统测试计划》（2学时）</p>
            <p>4．子系统1.0版验收 （6学时）</p>
            <p>5．子系统升级版验收 （2学时）</p>
            <p>6．《网络应用系统设计报告》（演讲）（6学时）</p>
            <p>7．股票交易系统完整合并版验收 （6学时）</p>


        </div>
    </div>
<?php include 'include/footer.html.php' ?>