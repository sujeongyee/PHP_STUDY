<?php
// $currentPage: 현재 페이지 번호
// $totalPages: 총 페이지 수
// 페이지 네비게이션 스타일 및 링크 생성

if ($totalPages > 1) {
    echo '<div class="pagination-container">';
    echo '<div class="pagination">';

    // 페이지 그룹 시작과 끝 페이지 번호 계산
    $groupSize = 10; // 한 그룹에 포함될 페이지 수
    $currentGroup = ceil($currentPage / $groupSize); // 현재 그룹
    $startPage = ($currentGroup - 1) * $groupSize + 1;
    $endPage = min($totalPages, $currentGroup * $groupSize);

    // "처음" 및 "이전 그룹" 버튼
    if ($currentGroup > 1) {
        echo '<a href="?page=1" class="pagination-btn first">&laquo;</a>';
        echo '<a href="?page=' . ($currentPage - 1) . '" class="pagination-btn prev">&lsaquo;</a>';
    }

    // 페이지 번호 버튼들
    for ($i = $startPage; $i <= $endPage; $i++) {
        echo '<a href="?page=' . $i . '" class="pagination-btn ' . ($i == $currentPage ? 'active' : '') . '">' . $i . '</a>';
    }

    // "다음 그룹" 및 "마지막" 버튼
    if ($currentGroup * $groupSize < $totalPages) {
        echo '<a href="?page=' . ($currentPage + 1) . '" class="pagination-btn next">&rsaquo;</a>';
        echo '<a href="?page=' . $totalPages . '" class="pagination-btn last">&raquo;</a>';
    }

    echo '</div>'; // .pagination
    echo '</div>'; // .pagination-container
}
?>
