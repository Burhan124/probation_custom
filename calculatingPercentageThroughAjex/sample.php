<?php
  include('includes/header.php');
?>
<body>
    <h1>Marksheet</h1>
    <div>
        <table>
            <tr>
                <td>
                    <table>
                        <tr>
                            <td>
                                <span>Enter the name of student :</span>
                            </td>
                            <td>
                                <input type="text" id="nameOfStudent" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Enter the number of subjects : </span>
                            </td>
                            <td>
                                <input type="number" id="noOfSubjects" min="1" onchange="UIPopulate()"
                                    onkeyup="UIPopulate()" />
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <span class="customButton">Calculate</span>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <table>
                        <tr>
                            <td>
                                <span>Min Marks Subject: </span>
                            </td>
                            <td>
                                <input type="text" id="minMarksSubject" readonly="readonly" />
                            </td>
                            <td>
                                <span>Min Marks: </span>
                            </td>
                            <td>
                                <input type="text" id="minMarks" readonly="readonly" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Max Marks Subject: </span>
                            </td>
                            <td>
                                <input type="text" id="maxMarksSubject" readonly="readonly" />
                            </td>
                            <td>
                                <span>Max Marks: </span>
                            </td>
                            <td>
                                <input type="text" id="maxMarks" readonly="readonly" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span>Percentage : </span>
                            </td>
                            <td>
                                <input type="text" id="percentage" readonly="readonly" />
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>
    <hr />
    <div>
        <table id="inputTable">
        </table>
    </div>
</body>
</html>
<?php
  include('includes/footer.php');
?>